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
        Schema::create('device', function (Blueprint $table) {
            $table->id('DeviceID');
            $table->string('DeviceName', 255)->notNullable()->unique(); // Ensure unique device names
            $table->unsignedBigInteger('StatusID')->notNullable();
            $table->timestamps();
        
            $table->foreign('StatusID')->references('StatusID')->on('status')->onDelete('cascade');
        });
        
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device');
    }
};