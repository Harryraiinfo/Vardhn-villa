<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {
        $images = Gallery::orderBy('position')->get();
        return view('home', compact('images'));
    }
}
