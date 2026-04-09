<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'name',
        'mobile',
        'email',
        'check_in',
        'check_out',
        'adults',
        'children',
        'room_type',
        'rooms',
        'special_request',
        'status',
        'price',
    ];
    
    public function foodBills()
    {
        return $this->hasMany(FoodBill::class);
    }
}
