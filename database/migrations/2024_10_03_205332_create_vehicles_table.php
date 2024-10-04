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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('make');
            $table->string('model');
            $table->year('year');
            $table->string('vin')->unique();
            $table->string('license_plate_number')->unique();
            $table->string('color');
            $table->string('engine_type');
            $table->integer('mileage');
            $table->text('features')->nullable();
            $table->decimal('price', 10, 2);
            $table->enum('availability', ['In Stock', 'Out Stock']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
