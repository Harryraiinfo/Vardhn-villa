<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index()
    {
        // Manager panel 
        if (request()->is('manager/*')) {
            $reviews = Review::latest()->get();
            return view('manager.reviews.index', compact('reviews'));
        }

        // Frontend
        return view('reviews');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'message' => 'required',
            'rating' => 'nullable|integer|min:1|max:5'
        ]);

        Review::create([
            'name' => $request->name,
            'message' => $request->message,
            'rating' => $request->rating,
            'status' => 0
        ]);

        return back()->with('success', 'Review Submitted!');
    }

    public function approve($id)
    {
        Review::findOrFail($id)->update(['status' => 1]);
        return back()->with('success', 'Review Approved');
    }

    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return back()->with('success', 'Review Deleted Successfully');
    }

        public function form()
    {
        $reviews = Review::where('status', 1)->latest()->get();

        return view('reviews', compact('reviews'));
    }
}
