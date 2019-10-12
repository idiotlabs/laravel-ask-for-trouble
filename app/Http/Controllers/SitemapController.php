<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class SitemapController extends Controller
{
    public function index() {
        $data = array();
        $data['date'] = now()->toDateString();

        return Response::view('sitemap', $data)->header('Content-Type', 'text/xml');
    }
}
