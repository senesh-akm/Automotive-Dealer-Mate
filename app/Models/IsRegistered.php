<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class IsRegistered extends Model
{
    use HasFactory;

    protected $fillable = [
        'vehicle_id',
        'registration_date',
        'owner_information',
        'insurance_details',
        'last_service_records',
        'purchase_date',
        'purchase_price',
        'location',
        'notes',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }
}
