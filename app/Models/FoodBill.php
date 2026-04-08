<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FoodBill extends Model
{
    protected $fillable = [
        'item',
        'price',
        'qty',
        'total',
        'grand_total'
    ];
}
