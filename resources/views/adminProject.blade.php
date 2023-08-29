@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Projects</h1>
@endsection

@section('isi')

<div class="container">
     <!-- File list -->
     <div class="card text-black" style="border-radius: 10px;">
          <div class="card-header-userlist">  
               <div class="card-body">
                    <div class="table-responsive-sm">
                         <a href="createproject" class="btn btn-success btn-xl" style="margin-bottom:15px">
                              <span class="icon text-white-50"><i class="fa-solid fa-file-circle-plus"></i></span>
                              <span class="text">Add Projects</span>
                         </a>
                         <div class="row g-3 align-items-center mb-4">
                              <div class="col-auto">
                              <label>Search Project Name</label>
                              </div>
                              <div class="col-auto">
                              <form action="project" method="GET">
                                   <input type="search" id="inputPassword6" name="search" aria-describedby="passwordHelpInline" placeholder="Type Project Name . .">
                                   <input type="submit" value="Search">
                              </form>
                              </div>
                         </div>
                         <table class="table table-striped">
                              <thead class="table table-light">
                                   <tr class="text-center">
                                        <th>No</th>
                                        <th>Nama Project</th>
                                        <th>Date Start</th>
                                        <th>Action</th>
                                   </tr>
                              </thead>
                              <tbody>
                              @foreach($project as $prj)
                                   <tr class="text-center">
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{$prj->namaproject}}</td>
                                        <td>{{$prj->created_at}}</td>
                                        <td class="text-center">
                                             <form class="d-inline" action="project/{{$prj->id}}/edit">
                                                  <button class="btn btn-info btn-sm">
                                                       <span class="icon text-white-50"><i class="fas fa-pen-alt"></i></span>
                                                       <span class="text">Edit</span>
                                                  </button>
                                             </form>
                                             <form class="d-inline" method="update" action="/admin/project/{{$prj->id}}">    
                                             @method('delete')
                                             @csrf
                                                <button type="submit" class="btn btn-danger btn-sm">
                                                    <span class="icon text-white-50"><i class="fas fa-trash-alt"></i></span>
                                                    <span class="text">Delete</span>
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