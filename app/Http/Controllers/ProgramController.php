<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function belanjamurah()
    {
        return view('belanjamurah');
    }

    public function belanjabulanan()
    {
        return view('belanjabulanan');
    }
}
