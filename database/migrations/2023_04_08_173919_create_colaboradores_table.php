<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colaboradores', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('apellido');
            $table->string('celular');
            $table->string('email');
            $table->string('direccion');
            $table->unsignedBigInteger('pais_id')->nullable()->unsigned();
            $table->foreign('pais_id')->references('id')->on('paises')->onDelete('cascade');
            $table->unsignedBigInteger('profesion_id')->nullable()->unsigned();
            $table->foreign('profesion_id')->references('id')->on('profesiones')->onDelete('cascade');
            $table->unsignedBigInteger('nivel_id')->nullable()->unsigned();
            $table->foreign('nivel_id')->references('id')->on('niveles')->onDelete('cascade');
            $table->unsignedBigInteger('tipo_colaborador_id')->nullable()->unsigned();
            $table->foreign('tipo_colaborador_id')->references('id')->on('tipo_colaborador')->onDelete('cascade');
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
        Schema::dropIfExists('colaboradores');
    }
};
