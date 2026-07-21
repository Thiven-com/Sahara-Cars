<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        $features = Feature::latest()->get();

        return view('admin.features.index', compact('features'));
    }

    public function create()
    {
        return view('admin.features.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:features',
            // 'icon' => 'nullable|max:255',
        ]);

        Feature::create([
            'name' => $request->name,
            // 'icon' => $request->icon,
            'status' => $request->status ?? 1,
        ]);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature Added Successfully');
    }

    public function edit($id)
    {
        $feature = Feature::findOrFail($id);

        return view('admin.features.edit', compact('feature'));
    }

    public function update(Request $request, $id)
    {
        $feature = Feature::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:features,name,' . $feature->id,
            'icon' => 'nullable|max:255',
        ]);

        $feature->update([
            'name' => $request->name,
            'icon' => $request->icon,
            'status' => $request->status,
        ]);

        return redirect()->route('admin.features.index')
            ->with('success', 'Feature Updated Successfully');
    }

    public function destroy($id)
    {
        Feature::findOrFail($id)->delete();

        return back()->with('success', 'Feature Deleted Successfully');
    }
}