<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetersController extends Controller
{
    public function index()
    {
        return view('meters.index');
    }

    public function create()
    {
        return view('meters.create');
    }
}
