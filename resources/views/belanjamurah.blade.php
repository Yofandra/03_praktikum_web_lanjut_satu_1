@extends('layouts.master')
@section('title', 'Program')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Program Belanja Murah</center>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Diskon 70% Mahasiswa</h5>
                <p class="card-text">Diskon hingga akhir tahun</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Diskon 80% Hari Raya</h5>
                <p class="card-text">Diskon hingga 1 bulan</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
</div>
@endsection