<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'supplier_code',
        'supplier_name',
        'supplier_address',
        'supplier_telephone',
        'fax_number',
        'supplier_country',
        'contact_person',
        'contact_number',
    ];
}
