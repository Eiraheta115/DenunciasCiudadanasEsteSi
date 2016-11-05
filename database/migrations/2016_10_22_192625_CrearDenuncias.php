<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearDenuncias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id_denuncia');
            $table->text('descripcion_denuncia');
            $table->dateTime('fecha_hora');

            $table->integer('id_user')->unsigned();
            $table->foreign('id_user')->references('id')->on('users');
            
            $table->integer('id_municipio')->unsigned();
            $table->foreign('id_municipio')->references('id_municipio')->on('municipios');

            $table->integer('id_entidad')->unsigned();
            $table->foreign('id_entidad')->references('id_entidad')->on('entidades');

            $table->integer('id_estado')->unsigned()->default(1);
            $table->foreign('id_estado')->references('id_estado')->on('estado_denuncias');

            $table->integer('id_acontecimiento')->unsigned();
            $table->foreign('id_acontecimiento')->references('id_acontecimiento')->on('acontecimientos');

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
        Schema::dropIfExists('denuncias');
    }
}
