<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BezoekersController extends Controller
{
    //
    public function index()
    {
        return view('bezoekers/home/index');
    }

    public function minor()
    {
        return view('bezoekers/home/minor');
    }
}
