<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'customer_group_code',
        'customer_group',
        'is_company_or_person',
        'customer_name',
        'nic',
        'address',
        'email',
        'fax_number',
        'phone_number',
        'contact_person',
        'contact_email',
        'contact_phone_number',
    ];

    protected $casts = [
        'is_company_or_person' => 'string',  // Enum stored as a string
    ];
}