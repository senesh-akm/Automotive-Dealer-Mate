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
        'add_item',
        'items_list',
        'add_vehicle',
        'vehicle_list',
        'is_registered',
        'add_customer',
        'customer_list',
        'appointment',
        'customer_payment',
        'add_supplier',
        'supplier_list',
        'supplier_payment',
        'finance_payment',
        'finance_loan',
        'finance_bank',
        'finance_bank_branches',
        'sales_reports',
        'income_report',
        'expense_report',
        'inventory_analytics',
    ];
    
    protected $casts = [
        'dashboard' => 'boolean',
        'company_branches' => 'boolean',
        'brands' => 'boolean',
        'add_item' => 'boolean',
        'items_list' => 'boolean',
        'add_vehicle' => 'boolean',
        'vehicle_list' => 'boolean',
        'is_registered' => 'boolean',
        'add_customer' => 'boolean',
        'customer_list' => 'boolean',
        'appointment' => 'boolean',
        'customer_payment' => 'boolean',
        'add_supplier' => 'boolean',
        'supplier_list' => 'boolean',
        'supplier_payment' => 'boolean',
        'finance_payment' => 'boolean',
        'finance_loan' => 'boolean',
        'finance_bank' => 'boolean',
        'finance_bank_branches' => 'boolean',
        'sales_reports' => 'boolean',
        'income_report' => 'boolean',
        'expense_report' => 'boolean',
        'inventory_analytics' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
