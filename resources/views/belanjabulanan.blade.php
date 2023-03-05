@extends('layouts.master')
@section('title', 'Program')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Program Belanja Bulanan</center>
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
                <h5 class="card-title">Belanja Paket Lengkap</h5>
                <p class="card-text">Dengan isi yang lengkap sesuai kebutuhan</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Belanja Paket Sehat</h5>
                <p class="card-text">Dengan isi sehat sesuai rekomendasi ahli gizi</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
</div>
@endsection