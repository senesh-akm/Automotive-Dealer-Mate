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
        Schema::create('loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_code')->unique();
            $table->string('item_code');
            $table->string('vehicle');
            $table->string('customer');
            $table->decimal('loan_amount', 10, 2);
            $table->float('annual_interest_rate');
            $table->integer('long_term_months');
            $table->decimal('down_payments', 10, 2);
            $table->decimal('monthly_payment', 10, 2);
            $table->decimal('total_payment', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
