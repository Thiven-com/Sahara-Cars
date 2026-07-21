<?php

use App\Http\Controllers\EnquiryController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get("/", [PageController::class, "index"])->name("home");
Route::get("/buy-cars", [PageController::class, "buyCars"])->name("buyCars");
Route::get("/sell-car", [PageController::class, "sellCar"])->name("sellCar");
Route::get("/finance", [PageController::class, "finance"])->name("finance");
Route::get("/about", [PageController::class, "about"])->name("about");
Route::get("/gallery", [PageController::class, "gallery"])->name("gallery");
Route::get("/car-details/{slug}", [PageController::class, "carDetails"])->name("carDetails");
Route::post('/enquiry', [EnquiryController::class, 'store'])
    ->name('enquiry.store');
Route::post('/contact/store', [EnquiryController::class, 'contactStore'])
    ->name('contact.store');
