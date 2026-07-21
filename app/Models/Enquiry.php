<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    //
    protected $fillable = [
        'car_id',
        'name',
        'mobile',
        'email',
        'city',
        'enquiry_type',
        'purchase_time',
        'message',
        'status'
    ];

    public function car()
    {
        return $this->belongsTo(Car::class, 'car_id');
    }
}
