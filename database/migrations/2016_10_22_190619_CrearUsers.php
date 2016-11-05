<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearUsers extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('verified')->default(0);
            $table->string('dui',10)->nullable();
            $table->string('direccion');
            $table->string('nombre',75);
            $table->string('apellido',75);
            $table->date('fecha_nacimiento');
            $table->string('token')->nullable();
            $table->rememberToken();

            $table->integer('rol')->unsigned()->default(1);
            $table->foreign('rol')->references('id_rol')->on('roles');

            $table->integer('entidad')->unsigned()->nullable();
            $table->foreign('entidad')->references('id_entidad')->on('entidades');

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
        Schema::dropIfExists('users');
    }
}
