<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return view('admin.gallery.index', compact('galleries'));
    }

    public function create()
    {
        return view('admin.gallery.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp|max:5120',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        $gallery = new Gallery();

        $gallery->title = $request->title;
        $gallery->sort_order = $request->sort_order ?? 0;
        $gallery->status = $request->status;

        if ($request->hasFile('image')) {

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/gallery'), $imageName);

            $gallery->image = 'uploads/gallery/' . $imageName;
        }

        $gallery->save();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery image added successfully.');
    }

    public function edit($id)
    {
        $gallery = Gallery::findOrFail($id);

        return view('admin.gallery.edit', compact('gallery'));
    }

    public function update(Request $request, $id)
    {
        $gallery = Gallery::findOrFail($id);

        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'sort_order' => 'nullable|integer',
            'status' => 'required|boolean',
        ]);

        $gallery->title = $request->title;
        $gallery->sort_order = $request->sort_order ?? 0;
        $gallery->status = $request->status;

        if ($request->hasFile('image')) {

            if (!empty($gallery->image) && file_exists(public_path($gallery->image))) {
                unlink(public_path($gallery->image));
            }

            $image = $request->file('image');

            $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

            $image->move(public_path('uploads/gallery'), $imageName);

            $gallery->image = 'uploads/gallery/' . $imageName;
        }

        $gallery->save();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery updated successfully.');
    }

    public function destroy($id)
    {
        $gallery = Gallery::findOrFail($id);

        if (!empty($gallery->image) && file_exists(public_path($gallery->image))) {
            unlink(public_path($gallery->image));
        }

        $gallery->delete();

        return redirect()
            ->route('admin.gallery.index')
            ->with('success', 'Gallery deleted successfully.');
    }
}