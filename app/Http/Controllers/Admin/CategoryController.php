<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::latest()->get();

        return view('admin.categories.index',compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|unique:categories',
            'image'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category = new Category();

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        // $category->description = $request->description;
        $category->status = $request->status ?? 1;

        if($request->hasFile('image')){

            $image = $request->file('image');

            $filename = time().'_'.$image->getClientOriginalName();

            $image->move(public_path('uploads/categories'),$filename);

            $category->image = 'uploads/categories/'.$filename;
        }

        $category->save();

        return redirect()->route('admin.categories.index')
            ->with('success','Category Added Successfully');
    }

    public function edit($id)
    {
        $category = Category::findOrFail($id);

        return view('admin.categories.edit',compact('category'));
    }

    public function update(Request $request,$id)
    {
        $category = Category::findOrFail($id);

        $request->validate([
            'name'=>'required|unique:categories,name,'.$category->id,
            'image'=>'nullable|image|mimes:jpg,jpeg,png,webp|max:2048',
        ]);

        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        // $category->description = $request->description;
        $category->status = $request->status;

        if($request->hasFile('image')){

            if($category->image && file_exists(public_path($category->image))){
                unlink(public_path($category->image));
            }

            $image = $request->file('image');

            $filename = time().'_'.$image->getClientOriginalName();

            $image->move(public_path('uploads/categories'),$filename);

            $category->image = 'uploads/categories/'.$filename;
        }

        $category->save();

        return redirect()->route('admin.categories.index')
            ->with('success','Category Updated Successfully');
    }

    public function destroy($id)
    {
        $category = Category::findOrFail($id);

        if($category->image && file_exists(public_path($category->image))){
            unlink(public_path($category->image));
        }

        $category->delete();

        return redirect()->route('admin.categories.index')->with('success','Category Deleted Successfully');
    }
}