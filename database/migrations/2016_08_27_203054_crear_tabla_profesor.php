<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaProfesor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profesor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_grupo_investigacion');
            $table->softDeletes();
            $table->string('nombre');
            $table->string('oficina');
            $table->string('telefono');
            $table->string('correo')->nullable();
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
        Schema::drop('profesor');
    }
}
