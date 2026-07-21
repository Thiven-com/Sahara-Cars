<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [

        'brand_id',
        'category_id',

        'model',
        'slug',
        'year',

        'fuel_type',
        'transmission',

        'kilometers',

        'price',

        'registration_no',
        'ownership',
        'insurance',
        'insurance_valid_till',
        'service_history',
        'accident_history',

        'engine',
        'power',
        'torque',
        'fuel_tank',
        'mileage',
        'drive_type',
        'color',

        'seating_capacity',
        'body_type',
        'ground_clearance',
        'boot_space',
        'top_speed',
        'airbags',

        'overview',

        'thumbnail',

        'description',

        'featured',

        'status'

    ];

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function galleries()
    {
        return $this->hasMany(CarGallery::class);
    }

    public function features()
    {
        return $this->belongsToMany(
            Feature::class,
            'car_features',
            'car_id',
            'feature_id'
        );
    }
}