<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('partidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('gameDate')->nullable(false);
            $table->unsignedInteger('local_team')->nullable(false);
            $table->unsignedInteger('visitor_team')->nullable(false);
            $table->foreign('local_team')->references('id')->on('equipos');
            $table->foreign('visitor_team')->references('id')->on('equipos');
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
        Schema::dropIfExists('partidos');
    }
}
