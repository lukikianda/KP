@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Userlist</h1>
@endsection

@section('isi')

<div class="card text-black" style="border-radius: 10px;">
    <div class="card-header-userlist">  
        <div class="card-body">
            <div class="table-responsive-sm">
                <div class="row g-3 align-items-center mb-4">
                    <div class="col-auto">
                        <label>Search Name</label>
                    </div>
                    <div class="col-auto">
                        <form action="userlist" method="GET">
                            <input type="search" id="inputPassword6" name="search" aria-describedby="passwordHelpInline" placeholder="Type Name . .">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                </div>
                <table class="table table-striped">
                    <thead class="table table-light">
                        <tr>
                            <td class="text-center">No</td>
                            <td class="text-center">ID</td>
                            <td class="text-center">Name</td>
                            <td class="text-center">Email</td>
                            <td class="text-center">Division</td>
                            <td class="text-center">Roles</td>
                            <td class="text-center">Action</td>
                        </tr>
                    </thead>
                    @foreach ($users as $usr)
                    <tbody>
                        <tr>
                            <td class="text-center" scope="row">{{ $loop->iteration }}</td>
                            <td class="text-center">{{ $usr['id'] }}</td>
                            <td>{{ $usr['name'] }}</td>
                            <td>{{ $usr['email'] }}</td>
                            <td class="text-center">{{ $usr['division']}}</td>
                            <td class="text-center">{{ $usr['type'] }}</td>
                            <td class="text-center">
                                <a href="userlist/{{$usr->id}}/edit" class="btn btn-success btn-sm">
                                <span class="icon text-white-50"><i class="fas fa-user-edit"></i></span>
                                <span class="text">Edit</span>
                                </a>
                                <form class="d-inline" method="UPDATE" action="/admin/userlist/{{$usr->id}}">    
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <span class="icon text-white-50"><i class="fas fa-trash-alt"></i></span>
                                        <span class="text">Delete</span>
                                    </button>
                                </form>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
            </div>
            {!! $users->links() !!}
        </div>
    </div>
</div>

@endsection