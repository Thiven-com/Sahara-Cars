<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    //
    protected $fillable = [
        'name',
        'icon',
        'status'
    ];

    public function cars()
    {
        return $this->belongsToMany(
            Car::class,
            'car_features',
            'feature_id',
            'car_id'
        );
    }
}
