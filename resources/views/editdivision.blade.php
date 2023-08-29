@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Edit Division</h1>
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
        <form method="post" action="/admin/division/{{$division->id}}" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Nama Divisi:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Division Name" name="namadivisi" value="{{$division->namadivisi}}">
                </div>
                <!-- Error -->
                @if($errors->has('namadivisi'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('namadivisi') }}
                </div>
                @endif
            </div>
            <div class="form-group ">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="/admin/division" class="btn btn-success">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection