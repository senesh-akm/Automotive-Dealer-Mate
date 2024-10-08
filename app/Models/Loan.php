<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'loan_amount',
        'annual_interest_rate',
        'long_term_months',
        'down_payments',
        'monthly_payment',
        'total_payment',
    ];

    protected $casts = [
        'loan_amount' => 'decimal:2',
        'annual_interest_rate' => 'float',
        'down_payments' => 'decimal:2',
        'monthly_payment' => 'decimal:2',
        'total_payment' => 'decimal:2',
    ];
}
