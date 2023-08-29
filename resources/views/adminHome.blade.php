@extends('layouts.admindashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Home</h1>
@endsection

@section('isi')
Welcome, {{ Auth::user()->name }} !

<div class="row">
    <div class="col-lg-4">
        <div class="card-data user" style="margin-top:20px">
            <div class="row">
                <div class="col-6"><i class="bi bi-person-fill"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Total Users</div>
                    <div class="card-count">{{$users_count}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data divisi" style="margin-top:20px">
            <div class="row">
                <div class="col-6"><i class="bi bi-people-fill"></i></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Total Divisi</div>
                    <div class="card-count">{{$division_count}}</div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-4">
        <div class="card-data laporan" style="margin-top:20px">
            <div class="row">
                <div class="col-6"><i class="bi bi-book-fill"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Total Laporan</div>
                    <div class="card-count">{{$files_count}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection