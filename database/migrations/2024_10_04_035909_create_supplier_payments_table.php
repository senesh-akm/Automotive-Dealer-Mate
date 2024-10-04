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
        Schema::create('supplier_payments', function (Blueprint $table) {
            $table->id();
            $table->string('supplier');
            $table->string('sender_account_number');
            $table->string('sender_account_name');
            $table->string('sender_bank');
            $table->string('sender_branch');
            $table->string('sender_branch_code');
            $table->string('sender_swift_code');
            $table->string('reciever_account_number');
            $table->string('reciever_account_name');
            $table->string('reciever_bank');
            $table->string('reciever_branch');
            $table->string('reciever_branch_code');
            $table->string('reciever_swift_code');
            $table->string('transfered_amount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('supplier_payments');
    }
};
