<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'employee_number' => 'EMP001',
            'name' => 'Super Admin',
            'designation' => 'Administrator',
            'is_head_office' => true,
            'branch' => 'Head Office',
            'email' => 'superadmin@example.com',
            'password' => Hash::make('password123'),
            'is_active' => true,
            'is_super_admin' => true,
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        DB::table('user_permissions')->insert([
            'id' => 1,
            'user_id' => 1,
            'dashboard' => 1,
            'company_branches' => 1,
            'brands' => 1,
            'add_item' => 1,
            'items_list' => 1,
            'add_vehicle' => 1,
            'vehicle_list' => 1,
            'is_registered' => 1,
            'add_customer' => 1,
            'customer_list' => 1,
            'appointment' => 1,
            'customer_payment' => 1,
            'add_supplier' => 1,
            'supplier_list' => 1,
            'supplier_payment' => 1,
            'finance_payment' => 1,
            'finance_loan' => 1,
            'finance_bank' => 1,
            'finance_bank_branches' => 1,
            'sales_reports' => 1,
            'income_report' => 1,
            'expense_report' => 1,
            'inventory_analytics' => 1,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
