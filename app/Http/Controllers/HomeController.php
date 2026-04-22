<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Review;

class HomeController extends Controller
{
    public function index()
    {
        $images = Gallery::orderBy('position')
        ->take(8)
        ->get();

         $reviews = Review::where('status', 1)
                ->latest()
                ->take(3) // 👈 homepage par 3 reviews
                ->get();
        return view('home', compact('images','reviews'));
    }
}
