<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('event_type', function (Blueprint $table) {
            $table->id('EventTypeID');
            $table->string('EventTypeName', 255)->notNullable();
        });
    }

    public function down()
    {
        Schema::dropIfExists('event_type');
    }
};
