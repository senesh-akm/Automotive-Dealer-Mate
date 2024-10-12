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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_group_code')->unique();
            $table->string('customer_group');
            $table->enum('is_company_or_person', ['company', 'person']);
            $table->string('customer_name');
            $table->string('nic')->nullable();
            $table->text('address');
            $table->string('email')->unique();
            $table->string('fax_number')->nullable();
            $table->string('phone_number');
            $table->string('contact_person')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('contact_phone_number')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
