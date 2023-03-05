@extends('layouts.master')

<link rel="stylesheet" type="text/css" href="/css/style.css">
<script type="text/javascript" src="/js/app.js"></script>
@section('home')
<!-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="p-3 mb-2 bg-info-subtle text-emphasis-info">.bg-info-subtle
    <h1>Halaman Bagian Home</h1><br><br>
    <h3>Yofandra Arta Priyoga</h3>
</div>
@endsection