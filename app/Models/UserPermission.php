<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserPermission extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'dashboard',
        'company_branches',
        'brands',
        'inventory',
        'vehicle',
        'is_registered',
        'customer',
        'appointment',
        'supplier',
        'finance_payment',
        'finance_loan',
        'finance_bank',
        'finance_bank_branches',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}