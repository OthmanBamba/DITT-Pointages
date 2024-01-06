<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pointages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->dateTime('arrivee');
            $table->dateTime('depart');
            $table->bigInteger('id_agent')->unsigned();
            $table->foreign('id_agents')->references('id')->on('agents');
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
        Schema::dropIfExists('pointages');
    }
}
