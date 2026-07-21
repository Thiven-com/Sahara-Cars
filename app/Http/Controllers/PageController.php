<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Car;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    public function index()
    {
        $latestCars = Car::with(['brand', 'category'])
            ->where('status', 1)
            ->latest()
            ->take(8)
            ->get();
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();
        return view("website.index", compact('latestCars', 'brands', 'categories'));
    }
    public function buyCars(Request $request)
    {
        $brands = Brand::where('status', 1)->get();
        $categories = Category::where('status', 1)->get();

        $query = Car::with('brand', 'category')
            ->where('status', 1);

        if ($request->filled('search')) {
            $query->where(function ($q) use ($request) {
                $q->where('model', 'like', '%' . $request->search . '%')
                    ->orWhereHas('brand', function ($b) use ($request) {
                        $b->where('name', 'like', '%' . $request->search . '%');
                    });
            });
        }

        if ($request->brand) {
            $query->where('brand_id', $request->brand);
        }

        if ($request->category) {
            $query->where('category_id', $request->category);
        }

        if ($request->price) {
            $query->where('price', '<=', $request->price);
        }

        if ($request->fuel) {
            $query->where('fuel_type', $request->fuel);
        }

        if ($request->transmission) {
            $query->where('transmission', $request->transmission);
        }

        if ($request->year) {
            $query->where('year', $request->year);
        }

        if ($request->ownership) {
            $query->where('ownership', $request->ownership);
        }

        switch ($request->sort) {

            case 'price_low':
                $query->orderBy('price');
                break;

            case 'price_high':
                $query->orderByDesc('price');
                break;

            case 'year':
                $query->orderByDesc('year');
                break;

            case 'km':
                $query->orderBy('kilometers');
                break;

            default:
                $query->latest();
        }

        $cars = $query->paginate(12)->withQueryString();

        return view('website.buy-cars', compact('cars', 'brands', 'categories'));
    }
    public function sellCar()
    {
        return view("website.sell-car");
    }
    public function finance()
    {
        return view("website.finance");
    }
    public function about()
    {
        return view("website.about");
    }
    public function gallery()
    {
        $galleries = Gallery::where('status', 1)
            ->orderBy('sort_order')
            ->latest()
            ->get();

        return view('website.gallery', compact('galleries'));
    }
    public function carDetails($slug)
    {
        $car = Car::with([
            'brand',
            'category',
            'features',
            'galleries'
        ])->where('slug', $slug)
            ->where('status', 1)
            ->firstOrFail();

        $similarCars = Car::with('brand')
            ->where('status', 1)
            ->where('id', '!=', $car->id)
            ->where(function ($query) use ($car) {
                $query->where('brand_id', $car->brand_id)
                    ->orWhere('category_id', $car->category_id);
            })
            ->latest()
            ->take(6)
            ->get();

        return view('website.car-details', compact('car', 'similarCars'));
    }
}
