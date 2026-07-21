<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Car;
use App\Models\CarGallery;
use App\Models\Category;
use App\Models\Feature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CarController extends Controller
{
    /**
     * Display Cars
     */
    public function index()
    {
        $cars = Car::with(['brand', 'category'])
            ->latest()
            ->paginate(15);

        return view('admin.cars.index', compact('cars'));
    }

    /**
     * Create Car
     */
    public function create()
    {
        $brands = Brand::where('status', 1)
            ->orderBy('name')
            ->get();

        $categories = Category::where('status', 1)
            ->orderBy('name')
            ->get();

        $features = Feature::where('status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.cars.create', compact(
            'brands',
            'categories',
            'features'
        ));
    }

    /**
     * Store Car
     */
    public function store(Request $request)
    {

        $request->validate([

            'brand_id' => 'required',

            'category_id' => 'required',

            'model' => 'required|max:255',

            'year' => 'required',

            'price' => 'required|numeric',

            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

        ]);

        DB::beginTransaction();

        try {

            $car = new Car();

            $car->brand_id = $request->brand_id;

            $car->category_id = $request->category_id;

            $car->model = $request->model;
            $car->slug = $this->generateSlug($request->model);

            $car->year = $request->year;

            $car->fuel_type = $request->fuel_type;

            $car->transmission = $request->transmission;

            $car->kilometers = $request->kilometers;

            $car->price = $request->price;

            $car->registration_no = $request->registration_no;

            $car->ownership = $request->ownership;

            $car->insurance = $request->insurance;

            $car->insurance_valid_till = $request->insurance_valid_till;

            $car->service_history = $request->service_history;

            $car->accident_history = $request->accident_history;

            $car->engine = $request->engine;

            $car->power = $request->power;

            $car->torque = $request->torque;

            $car->fuel_tank = $request->fuel_tank;

            $car->mileage = $request->mileage;

            $car->drive_type = $request->drive_type;

            $car->color = $request->color;

            $car->seating_capacity = $request->seating_capacity;

            $car->body_type = $request->body_type;

            $car->ground_clearance = $request->ground_clearance;

            $car->boot_space = $request->boot_space;

            $car->top_speed = $request->top_speed;

            $car->airbags = $request->airbags;

            $car->overview = $request->overview;

            $car->description = $request->description;

            $car->featured = $request->featured ? 1 : 0;

            $car->status = $request->status ? 1 : 0;

            /*
            |--------------------------------------------------------------------------
            | Thumbnail Upload
            |--------------------------------------------------------------------------
            */

            if ($request->hasFile('thumbnail')) {

                $image = $request->file('thumbnail');

                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $image->move(
                    public_path('uploads/cars'),
                    $filename
                );

                $car->thumbnail = 'uploads/cars/' . $filename;
            }

            $car->save();

            /*
            |--------------------------------------------------------------------------
            | Gallery Images
            |--------------------------------------------------------------------------
            */

            if ($request->hasFile('gallery')) {

                foreach ($request->file('gallery') as $image) {

                    $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    $image->move(
                        public_path('uploads/car-gallery'),
                        $filename
                    );

                    CarGallery::create([

                        'car_id' => $car->id,

                        'image' => 'uploads/car-gallery/' . $filename

                    ]);
                }
            }

            /*
            |--------------------------------------------------------------------------
            | Features
            |--------------------------------------------------------------------------
            */

            if ($request->filled('features')) {

                $car->features()->sync($request->features);

            }

            DB::commit();

            return redirect()
                ->route('admin.cars.index')
                ->with('success', 'Car Added Successfully.');
        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $e->getMessage());
        }
    }

    /**
     * Edit Car
     */
    public function edit($id)
    {
        $car = Car::with(['galleries', 'features'])->findOrFail($id);

        $brands = Brand::where('status', 1)
            ->orderBy('name')
            ->get();

        $categories = Category::where('status', 1)
            ->orderBy('name')
            ->get();

        $features = Feature::where('status', 1)
            ->orderBy('name')
            ->get();

        return view('admin.cars.edit', compact(
            'car',
            'brands',
            'categories',
            'features'
        ));
    }

    /**
     * Update Car
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([

            'brand_id' => 'required',

            'category_id' => 'required',

            'model' => 'required|max:255',

            'year' => 'required',

            'price' => 'required|numeric',

            'thumbnail' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

            'gallery.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:4096',

        ]);

        DB::beginTransaction();

        try {

            $car = Car::findOrFail($id);

            $car->brand_id = $request->brand_id;

            $car->category_id = $request->category_id;

            $car->model = $request->model;
            $car->slug = $this->generateSlug($request->model, $car->id);

            $car->year = $request->year;

            $car->fuel_type = $request->fuel_type;

            $car->transmission = $request->transmission;

            $car->kilometers = $request->kilometers;

            $car->price = $request->price;

            $car->registration_no = $request->registration_no;

            $car->ownership = $request->ownership;

            $car->insurance = $request->insurance;

            $car->insurance_valid_till = $request->insurance_valid_till;

            $car->service_history = $request->service_history;

            $car->accident_history = $request->accident_history;

            $car->engine = $request->engine;

            $car->power = $request->power;

            $car->torque = $request->torque;

            $car->fuel_tank = $request->fuel_tank;

            $car->mileage = $request->mileage;

            $car->drive_type = $request->drive_type;

            $car->color = $request->color;

            $car->seating_capacity = $request->seating_capacity;

            $car->body_type = $request->body_type;

            $car->ground_clearance = $request->ground_clearance;

            $car->boot_space = $request->boot_space;

            $car->top_speed = $request->top_speed;

            $car->airbags = $request->airbags;

            $car->overview = $request->overview;

            $car->description = $request->description;

            $car->featured = $request->featured ? 1 : 0;

            $car->status = $request->status ? 1 : 0;

            /*
            |--------------------------------------------------------------------------
            | Replace Thumbnail
            |--------------------------------------------------------------------------
            */

            if ($request->hasFile('thumbnail')) {

                if (
                    $car->thumbnail &&
                    file_exists(public_path($car->thumbnail))
                ) {
                    unlink(public_path($car->thumbnail));
                }

                $image = $request->file('thumbnail');

                $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                $image->move(
                    public_path('uploads/cars'),
                    $filename
                );

                $car->thumbnail = 'uploads/cars/' . $filename;
            }

            $car->save();

            /*
            |--------------------------------------------------------------------------
            | Upload New Gallery Images
            |--------------------------------------------------------------------------
            */

            if ($request->hasFile('gallery')) {

                foreach ($request->file('gallery') as $image) {

                    $filename = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();

                    $image->move(
                        public_path('uploads/car-gallery'),
                        $filename
                    );

                    CarGallery::create([

                        'car_id' => $car->id,

                        'image' => 'uploads/car-gallery/' . $filename

                    ]);

                }

            }

            /*
            |--------------------------------------------------------------------------
            | Sync Features
            |--------------------------------------------------------------------------
            */

            if ($request->filled('features')) {

                $car->features()->sync($request->features);

            } else {

                $car->features()->detach();

            }

            DB::commit();

            return redirect()
                ->route('admin.cars.index')
                ->with('success', 'Car Updated Successfully.');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()
                ->withInput()
                ->with('error', $e->getMessage());

        }
    }
    /**
     * Delete Car
     */
    public function destroy($id)
    {
        DB::beginTransaction();

        try {

            $car = Car::with('galleries')->findOrFail($id);

            /*
            |--------------------------------------------------------------------------
            | Delete Thumbnail
            |--------------------------------------------------------------------------
            */

            if (
                $car->thumbnail &&
                file_exists(public_path($car->thumbnail))
            ) {
                unlink(public_path($car->thumbnail));
            }

            /*
            |--------------------------------------------------------------------------
            | Delete Gallery Images
            |--------------------------------------------------------------------------
            */

            foreach ($car->galleries as $gallery) {

                if (
                    $gallery->image &&
                    file_exists(public_path($gallery->image))
                ) {
                    unlink(public_path($gallery->image));
                }

                $gallery->delete();
            }

            /*
            |--------------------------------------------------------------------------
            | Remove Features
            |--------------------------------------------------------------------------
            */

            $car->features()->detach();

            /*
            |--------------------------------------------------------------------------
            | Delete Car
            |--------------------------------------------------------------------------
            */

            $car->delete();

            DB::commit();

            return redirect()
                ->route('admin.cars.index')
                ->with('success', 'Car Deleted Successfully.');

        } catch (\Exception $e) {

            DB::rollBack();

            return back()->with('error', $e->getMessage());

        }
    }

    /**
     * Delete Gallery Image
     */
    public function deleteGallery($id)
    {
        $gallery = CarGallery::findOrFail($id);

        if (
            $gallery->image &&
            file_exists(public_path($gallery->image))
        ) {
            unlink(public_path($gallery->image));
        }

        $gallery->delete();

        return back()->with('success', 'Gallery Image Deleted.');
    }

    /**
     * Change Status
     */
    public function changeStatus($id)
    {
        $car = Car::findOrFail($id);

        $car->status = !$car->status;

        $car->save();

        return back()->with('success', 'Status Updated Successfully.');
    }

    /**
     * Change Featured Status
     */
    public function changeFeatured($id)
    {
        $car = Car::findOrFail($id);

        $car->featured = !$car->featured;

        $car->save();

        return back()->with('success', 'Featured Status Updated Successfully.');
    }

    private function generateSlug($model, $ignoreId = null)
    {
        $slug = Str::slug($model);

        $exists = Car::where('slug', $slug)
            ->when($ignoreId, function ($query) use ($ignoreId) {
                $query->where('id', '!=', $ignoreId);
            })
            ->count();

        if ($exists > 0) {
            $slug = $slug . '-' . ($exists + 1);
        }

        return $slug;
    }
}
