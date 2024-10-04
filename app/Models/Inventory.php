<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    use HasFactory;

    protected $fillable = [
        'image',
        'item_code',
        'item_name',
        'quantity_available',
        'status',
        'unit_price',
        'supplier',
        'location',
        'date_added',
        'last_updated',
        'minimum_stock_level',
        'category',
        'comments',
    ];
}
