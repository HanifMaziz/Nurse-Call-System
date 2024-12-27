<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('event', function (Blueprint $table) {
            $table->id('EventID');
            $table->unsignedBigInteger('DeviceID')->notNullable();
            $table->unsignedBigInteger('StatusID')->notNullable();
            $table->dateTime('TimeStamp')->notNullable();
            $table->integer('Duration')->nullable();

            $table->foreign('DeviceID')->references('DeviceID')->on('device')->onDelete('cascade');
            $table->foreign('StatusID')->references('StatusID')->on('status')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('event');
    }
};
