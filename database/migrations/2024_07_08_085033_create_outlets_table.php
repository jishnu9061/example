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
        Schema::create('outlets', function (Blueprint $table) {
            $table->id();
            $table->string('outlet_code')->unique();
            $table->string('outlet_name')->nullable();
            $table->text('address')->nullable();
            $table->string('district')->nullable();
            $table->string('state')->nullable();
            $table->string('map')->nullable();
            $table->string('socket_type')->nullable();
            $table->string('vehicles')->nullable();
            $table->text('amenities')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('outlets');
    }
};
