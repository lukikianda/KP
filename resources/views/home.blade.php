@extends('layouts.userdashboard')

@section('namahalaman')
<h1 class="h3 mb-3">Home</h1>
@endsection

@section('isi')
Welcome, {{ Auth::user()->name }} !

<div class="row">
    <div class="col-lg-4">
        <div class="card-data laporan" style="margin-top:20px">
            <div class="row">
                <div class="col-6"><i class="bi bi-book-fill"></i></div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                    <div class="card-desc">Laporan</div>
                    <div class="card-count">{{$files_count}}</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection