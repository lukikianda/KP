@extends('layouts.userdashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Submit Laporan</h1>
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
        <form method="post" action="{{ route('submitform') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Submitter:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="submitter" value="{{ Auth::user()->name }}" readonly>
                </div>
                <!-- Error -->
                @if($errors->has('submitter'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('submitter') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Divisi:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="" name="division" value="{{ Auth::user()->division }}" readonly>
                </div>
                <!-- Error -->
                @if($errors->has('division'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('division') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Nama Laporan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Name" name="name" value="{{ old('name') }}">
                </div>
                <!-- Error -->
                @if($errors->has('name'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('name') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Nama Project:</label>
                <div class="col-sm-10">
                    <select name="projectname" class="form-control">
                        <option value="">-Select Project-</option>
                        @foreach ($project as $prj)
                            <option class="form-control" value="{{$prj->namaproject}}">{{$prj->namaproject}}</option>
                        @endforeach
                    </select>
                </div>
                <!-- Error -->
                @if($errors->has('projectname'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('projectname') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="file">File:</label>
                <div class="col-sm-10">
                    <input type="file" name="file" class="form-control">
                </div>
                <!-- Error -->
                @if($errors->has('file'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('file') }}
                </div>
                @endif
            </div>
            <div class="form-group mb-4">
                <label class="control-label col-sm-2" for="name">Keterangan:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Name" name="keterangan" value="{{ old('keterangan') }}">
                </div>
                <!-- Error -->
                @if($errors->has('keterangan'))
                <div class='text-danger mt-2'>
                    * {{ $errors->first('keterangan') }}
                </div>
                @endif
            </div>
            <div class="form-group ">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-info">Submit</button>
                    <a href="laporan" class="btn btn-success">Back</a>
                </div>
            </div>
        </form>
    </div>
</div>

@endsection