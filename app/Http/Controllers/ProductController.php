<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function sayur()
    {
        return view('sayur');
    }

    public function daging()
    {
        return view('daging');
    }

    public function buah()
    {
        return view('buah');
    }
}
