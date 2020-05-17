<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LandingController extends Controller
{
    public function index()
    {
        return view('landing');
    }

    public function contact()
    {
        return view('contact');
    }
}
