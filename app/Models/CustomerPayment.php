<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'account_number',
        'account_name',
        'bank',
        'branch',
        'branch_code',
        'swift_code',
        'sender_account_number',
        'sender_account_name',
        'sender_bank',
        'sender_branch',
        'sender_branch_code',
        'sender_swift_code',
        'transfered_amount',
    ];
}
