@extends('layouts.master')
@section('title', 'News')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <h1>
                        <center>Berita {{ $id }}</center>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

