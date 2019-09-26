<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class RobotsController extends Controller
{
    public function index() {
        return Response::view('robots')->header('Content-Type', 'text/plain');
    }
}
