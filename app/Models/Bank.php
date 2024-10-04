<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bank extends Model
{
    use HasFactory;

    protected $fillable = [
        'account_number',
        'account_name',
        'bank',
        'branch',
        'branch_code',
        'swift_code',
    ];
}
