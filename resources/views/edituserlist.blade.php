@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Edit User</h1>
@endsection

@section('isi')

<div class="row">
    <div class="col-md-8 mt-5" style="margin: 0 auto;">
    <!-- Alert message (start) -->
    @if(Session::has('message'))
        <div class="alert {{ Session::get('alert-class') }} ">
            {{ Session::get('message') }}
        </div>
    @endif
    <!-- Alert message (end) -->
        <form method="post" action="/admin/userlist/{{$users->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="name" value="{{$users->name}}">
                </div>
                <!-- Error -->
                @if($errors->has('name'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Email:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Name" name="email" value="{{$users->email}}">
                </div>
                <!-- Error -->
                @if($errors->has('email'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('email') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Roles:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Name" name="type" value="{{$users->type}}">
                </div>
                <!-- Error -->
                @if($errors->has('type'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('type') }}
                </div>
                @endif
                <label for="name">0 = Normal User | 1 = Admin | 2 = Manager</label>
            </div>

            
            <div class="form-group ">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="/admin/userlist" class="btn btn-success">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection