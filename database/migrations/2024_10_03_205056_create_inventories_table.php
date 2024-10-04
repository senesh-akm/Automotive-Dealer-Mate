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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('image')->nullable();
            $table->string('item_code')->unique();
            $table->string('item_name');
            $table->integer('quantity_available');
            $table->enum('status', ['In Stock', 'Out Stock']);
            $table->decimal('unit_price', 10, 2);
            $table->string('supplier');
            $table->string('location');
            $table->date('date_added');
            $table->date('last_updated')->nullable();
            $table->integer('minimum_stock_level')->default(1);
            $table->string('category');
            $table->text('comments')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
