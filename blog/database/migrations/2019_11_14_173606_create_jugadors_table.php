<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJugadorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jugadores', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('team_id')->nullable(false);
            $table->foreign('team_id')->references('id')->on('esuipos');
            $table->string('playerName')->nullable(false);
            $table->string('playerLastName')->nullable(false);
            $table->smallInteger('age')->nullable(false);
            $table->smallInteger('playerNumber');
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
        Schema::dropIfExists('jugadors');
    }
}
