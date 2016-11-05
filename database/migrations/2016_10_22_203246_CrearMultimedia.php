<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearMultimedia extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('multimedias', function (Blueprint $table) {
            $table->increments('id_multimedia');
            $table->string('nombre_multimedia');
            $table->double('latitud',15,12)->nullable();
            $table->double('longitud',15,12)->nullable();
            $table->date('fecha_multimedia')->nullable();
            $table->string('tipo_multimedia',2);
            $table->integer('id_denuncia')->unsigned();
            $table->foreign('id_denuncia')->references('id_denuncia')->on('denuncias');
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
        Schema::dropIfExists('multimedias');
    }
}
