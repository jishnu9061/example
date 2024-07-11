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
        Schema::create('counts', function (Blueprint $table) {
            $table->id();
            $table->integer('charging_stations')->nullable();
            $table->integer('hours_of_charging')->nullable();
            $table->integer('active_users')->nullable();
            $table->integer('cities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counts');
    }
};
