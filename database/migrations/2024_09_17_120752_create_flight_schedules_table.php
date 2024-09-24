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
        Schema::create('flight_schedules', function (Blueprint $table) {
            $table->id();
            $table->integer('flight_number');
            $table->string('origin_airport');
            $table->string('destination_airport');
            $table->string('date');
            $table->string('time');
            $table->string('duration');
            $table->integer('available_seats');
            $table->integer('price');
            $table->string('status');
            $table->integer('baggage_allowance');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flight_schedules');
    }
};
