<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BrandController extends Controller
{

    public function index()
    {
        $brands = Brand::latest()->paginate(15);

        return view(
            'admin.brands.index',
            compact('brands')
        );
    }

    public function create()
    {
        return view('admin.brands.create');
    }

    public function store(Request $request)
    {
        $request->validate([

            'name' => 'required|unique:brands',

            'logo' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'

        ]);

        $brand = new Brand();

        $brand->name = $request->name;

        $brand->slug = Str::slug($request->name);

        $brand->status = $request->status ?? 1;

        if ($request->hasFile('logo')) {

            $file = $request->file('logo');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(
                public_path('uploads/brands'),
                $filename
            );

            $brand->logo = 'uploads/brands/' . $filename;

        }

        $brand->save();

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Brand Added Successfully');
    }

    public function edit($id)
    {
        $brand = Brand::findOrFail($id);

        return view(
            'admin.brands.edit',
            compact('brand')
        );
    }

    public function update(Request $request, $id)
    {

        $brand = Brand::findOrFail($id);

        $request->validate([

            'name' => 'required|unique:brands,name,' . $brand->id,

            'logo' => 'nullable|image'

        ]);

        $brand->name = $request->name;

        $brand->slug = Str::slug($request->name);

        $brand->status = $request->status;

        if ($request->hasFile('logo')) {

            if ($brand->logo && file_exists(public_path($brand->logo))) {

                unlink(public_path($brand->logo));

            }

            $file = $request->file('logo');

            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(
                public_path('uploads/brands'),
                $filename
            );

            $brand->logo = 'uploads/brands/' . $filename;

        }

        $brand->save();

        return redirect()
            ->route('admin.brands.index')
            ->with('success', 'Brand Updated');
    }

    public function destroy($id)
    {

        $brand = Brand::findOrFail($id);

        if ($brand->logo && file_exists(public_path($brand->logo))) {

            unlink(public_path($brand->logo));

        }

        $brand->delete();

        return back()->with('success', 'Brand Deleted');

    }

}