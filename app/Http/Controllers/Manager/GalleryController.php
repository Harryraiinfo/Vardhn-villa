<?php

namespace App\Http\Controllers\Manager;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $images = Gallery::orderBy('position')->get();
        return view('manager.gallery.index', compact('images'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|image'
        ]);

        $file = $request->file('image');
        $name = time() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('gallery'), $name);

        $last = Gallery::max('position') ?? 0;

        Gallery::create([
            'image' => $name,
            'position' => $last + 1
        ]);

        return back()->with('success', 'Image Added');
    }

    public function destroy($id)
    {
        $img = Gallery::findOrFail($id);

        $path = public_path('gallery/' . $img->image);
        if (file_exists($path)) {
            unlink($path);
        }
        $img->delete();

        return back()->with('success', 'Image Deleted');
    }

    public function sort(Request $request)
    {
if(!$request->has('order')){
    return response()->json(['error' => 'No data'], 400);
}

        foreach ($request->order as $item) {
            Gallery::where('id', $item['id'])
                ->update(['position' => $item['position']]);
        }

        return response()->json(['success' => true]);
    }
}
