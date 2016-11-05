<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearAcontecimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acontecimientos', function (Blueprint $table) {
            $table->increments('id_acontecimiento');
            $table->string('nombre_acontecimiento',30);
            $table->integer('id_entidad')->unsigned();
            $table->foreign('id_entidad')->references('id_entidad')->on('entidades');
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
        Schema::dropIfExists('acontecimientos');
    }
}
