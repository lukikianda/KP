@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Laporan</h1>
@endsection

@section('isi')

<div class="container">
     <!-- File list -->
     <div class="card text-black" style="border-radius: 10px;">
          <div class="card-header-userlist">  
               <div class="card-body">
                    <div class="table-responsive-sm">
                         <a href="submitlaporan" class="btn btn-success btn-xl" style="margin-bottom:15px">
                              <span class="icon text-white-50"><i class="fa-solid fa-file-circle-plus"></i></span>
                              <span class="text">Submit Laporan</span>
                         </a>

                         <form action="filter" method="GET">
                              <div class="row pb-3">
                                   <div class="col-md-3">
                                        <label>Start Date :</label>
                                        <input type="date" name="start_date" class="form-control">
                                   </div>
                                   <div class="col-md-3">
                                        <label >End Date :</label>
                                        <input type="date" name="end_date" class="form-control">
                                   </div>
                                   <div class="col-md-1 pt-4">
                                        <button type="submit" class="btn btn-primary">Filter</button>
                                   </div>
                              </div>
                         </form>

                         <form action="laporan" method="GET" class="row g-3">
                              <div class="col-md-3">
                                   <label>Search Report :</label>
                                   <input type="search" class="form-control" id="inputPassword6" name="search" aria-describedby="passwordHelpInline" placeholder="Keyword">
                              </div>
                              <div class="col-md-2 pt-4">
                                   <button type="submit" class="btn btn-primary">Search</button>
                              </div>
                              <i style="color:grey">*Keyword : Submitter / Nama Laporan / Nama Project / Divisi / Status</i>
                              <div class="col-md-3 pb-4">
                                   <button type="submit" class="btn btn-danger">Reset Filter</button>
                              </div>   
                         </form>
                         <table class="table table-striped">
                              <thead class="table table-light">
                                   <tr class="text-center">
                                        <th>No</th>
                                        <th>Submitter</th>
                                        <th>Divisi</th>
                                        <th>Nama Laporan</th>
                                        <th>Nama Project</th>
                                        <th>Keterangan</th>
                                        <th>Tanggal Submit</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                                   @foreach($files as $file)
                                   @php
                                   $ext = strtolower(pathinfo($file->filepath, PATHINFO_EXTENSION));
                                   $imgext_arr = array("jpg","jpeg","png");
                                   $isImage = false;
                                   if(in_array($ext,$imgext_arr))
                                        {
                                             $isImage = true;
                                        }
                                   @endphp
                                   <tr class="text-center">
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $file->submitter }}</td>
                                        <td>{{ $file->division }}</td>
                                        <td>{{ $file->name }}</td>
                                        <td>{{ $file->projectname }}</td>
                                        <td>{{ $file->keterangan }}</td>
                                        <td>{{ $file->created_at }}</td>
                                        <td>{{ $file->status }}</td>
                                        <td class="text-center">
                                             <form action="laporan/{{$file->id}}/accept" class="d-inline">
                                                  <button class="btn btn-success btn-sm">
                                                       <span class="icon text-white-50"><i class="fa-solid fa-check"></i></span>
                                                       <span class="text">Accept</span>
                                                  </button>
                                             </form>
                                             <form action="laporan/{{$file->id}}/reject" class="d-inline">
                                                  <button class="btn btn-warning btn-sm">
                                                       <span class="icon text-white-50"><i class="fa-solid fa-x"></i></span>
                                                       <span class="text">Reject</span>
                                                  </button>
                                             </form>
                                             <form action="{{ $file->filepath }}" target="_blank" class="d-inline">
                                                  <button class="btn btn-primary btn-sm">
                                                       <span class="icon text-white-50"><i class="fas fa-eye alt"></i></span>
                                                       <span class="text">View</span>
                                                  </button>
                                             </form>                               
                                             <form action="laporan/{{$file->id}}/edit" class="d-inline">
                                                  <button class="btn btn-info btn-sm">
                                                       <span class="icon text-white-50"><i class="fas fa-pen-alt"></i></span>
                                                       <span class="text">Edit</span>
                                                  </button>
                                             </form>
                                             <form class="d-inline" method="update" action="/admin/laporan/{{$file->id}}">    
                                             @method('delete')
                                             @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <span class="icon text-white-50"><i class="fas fa-trash-alt"></i></span>
                                                    <span class="text">Del</span>
                                                </button>
                                            </form>
                                        </td>
                                   </tr>
                                   @endforeach
                              </tbody>
                         </table>
                    </div>
               </div>
          </div>
     </div>
</div>

@endsection