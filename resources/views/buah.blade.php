@extends('layouts.master')
@section('title', 'Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Belanja Buah</center>
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
                <h5 class="card-title">Apel Batu</h5>
                <p class="card-text">Apel asli khas Batu, Jawa Timur</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Durian</h5>
                <p class="card-text">Durian dengan kualitas terbaik</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
</div>
@endsection