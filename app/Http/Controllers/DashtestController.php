<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashtestController extends Controller
{
    public function index()
    {
        return view('dashtest');
    }
}
