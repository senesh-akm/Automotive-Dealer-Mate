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
}
