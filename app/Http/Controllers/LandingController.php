<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LandingController extends Controller
{
    public function index()
    {
        $photos = File::allFiles(public_path('/assets/images/landing'));

        return view('landing')
            ->with('photos', $photos);
    }

    public function contact()
    {
        return view('contact');
    }
}
