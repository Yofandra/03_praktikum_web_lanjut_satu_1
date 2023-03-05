@extends('layouts.master')
@section('title', 'Product')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Belanja Daging</center>
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
                <h5 class="card-title">Daging Sapi</h5>
                <p class="card-text">Daging dengan kualitas terbaik</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Daging Kambing</h5>
                <p class="card-text">Daging dengan kualitas terbaik</p>
                <a href="#" class="btn btn-primary">Order</a>
            </div>
        </div>
    </div>
</div>
@endsection