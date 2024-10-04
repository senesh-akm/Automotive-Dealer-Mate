<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_permissions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->boolean('dashboard')->default(false);
            $table->boolean('company_branches')->default(false);
            $table->boolean('brands')->default(false);
            $table->boolean('inventory')->default(false);
            $table->boolean('vehicle')->default(false);
            $table->boolean('is_registered')->default(false);
            $table->boolean('customer')->default(false);
            $table->boolean('appointment')->default(false);
            $table->boolean('supplier')->default(false);
            $table->boolean('finance_payment')->default(false);
            $table->boolean('finance_loan')->default(false);
            $table->boolean('finance_bank')->default(false);
            $table->boolean('finance_bank_branches')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_permissions');
    }
};
