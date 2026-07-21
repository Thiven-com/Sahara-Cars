<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\BrandController;
use App\Http\Controllers\Admin\CarController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\EnquiryController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\GalleryController;
use Illuminate\Support\Facades\Route;





Route::get('login', [AuthController::class, 'showLoginForm'])->name('admin.login');
Route::post('login', [AuthController::class, 'login'])->name('admin.loginAction');

Route::post('logout', [AuthController::class, 'logout'])->name('admin.logout');
Route::get('logout', [AuthController::class, 'logout']);

Route::group(['middleware' => 'admin'], function () {
    Route::get('dashboard', [AuthController::class, 'dashboard'])
        ->name('admin.dashboard');
    Route::resource('brands', BrandController::class)->names('admin.brands');
    Route::resource('categories', CategoryController::class)->names('admin.categories');
    Route::resource('features', FeatureController::class)->names('admin.features');
    Route::resource('cars', CarController::class)->names('admin.cars');

    Route::get('cars/{id}/status', [CarController::class, 'changeStatus'])
        ->name('admin.cars.status');

    Route::get('cars/{id}/featured', [CarController::class, 'changeFeatured'])
        ->name('admin.cars.featured');

    // Route::delete('cars/gallery/{id}', [CarController::class, 'deleteGallery'])
    //     ->name('admin.cars.gallery.delete');
    Route::get('cars/gallery/delete/{id}', [CarController::class, 'deleteGallery'])
        ->name('admin.cars.gallery.delete');

    Route::resource('contacts', ContactController::class)->names('admin.contacts');

    Route::resource('enquiries', EnquiryController::class)->names('admin.enquiries');
    Route::resource('galleries', GalleryController::class)->names('admin.gallery');

    Route::get('settings/company', 'SiteSettingController@site')->name('admin.settings.company');
    Route::post('setting/company/update', 'SiteSettingController@company_setting_update')->name('admin.settings.company.update');

});

Route::get('forgot-password', [AuthController::class, 'showForgotForm'])
    ->name('admin.password.request');

Route::post('send-otp', [AuthController::class, 'sendOtp'])
    ->name('admin.password.sendOtp');

Route::get('verify-otp', [AuthController::class, 'showVerifyForm'])
    ->name('admin.password.verifyForm');

Route::post('verify-otp', [AuthController::class, 'verifyOtp'])
    ->name('admin.password.verifyOtp');

Route::post('reset-password-otp', [AuthController::class, 'resetPassword'])
    ->name('admin.password.resetOtp');





