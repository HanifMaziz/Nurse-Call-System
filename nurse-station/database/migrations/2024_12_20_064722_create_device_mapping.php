<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('device_mapping', function (Blueprint $table) {
            $table->id('DeviceMappingID');
            $table->integer('DeviceStgCode')->notNullable()->unique(); // Ensure unique staging codes
            $table->string('DeviceName', 255)->notNullable();
            $table->unsignedBigInteger('StatusID')->notNullable();
        
            $table->foreign('StatusID')->references('StatusID')->on('status')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('device_mapping');
    }
};
