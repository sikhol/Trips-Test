<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trips', function (Blueprint $table) {
            $table->integer('id');
            $table->timestamp('Datetime')->nullable();
            $table->longText('start')->nullable();
            $table->longText('end')->nullable();        
            $table->integer('distance');
            $table->integer('duration');
            $table->string('max_speed');
            $table->string('average_speed');
            $table->integer('idle_duration');
            $table->integer('score');
            $table->longText('idles')->nullable();
            $table->longText('histories')->nullable();
            $table->longText('violations')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trips');
    }
}
