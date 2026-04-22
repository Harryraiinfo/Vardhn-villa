<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        return view('reviews'); // form page
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'rating' => 'nullable|integer|min:1|max:5'
        ]);

        Review::create($request->all());

        return back()->with('success', 'Review Submitted!');
    }

    public function approve($id)
    {
        Review::where('id', $id)->update(['status' => 1]);
        return back()->with('success', 'Review Approved');
    }
}
