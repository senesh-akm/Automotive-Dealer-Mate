<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerPayment extends Model
{
    use HasFactory;

    protected $fillable = [
        'customer',
        'sender_account_number',
        'sender_account_name',
        'sender_bank',
        'sender_branch',
        'sender_branch_code',
        'sender_swift_code',
        'reciever_account_number',
        'reciever_account_name',
        'reciever_bank',
        'reciever_branch',
        'reciever_branch_code',
        'reciever_swift_code',
        'transaction_amount',
    ];
}
