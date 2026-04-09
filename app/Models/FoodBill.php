<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodBill extends Model
{
    protected $fillable = [
        'booking_id',
        'item',
        'price',
        'qty',
        'total',
        'grand_total'
    ];

    public function booking()
{
    return $this->belongsTo(Booking::class);
}
}
