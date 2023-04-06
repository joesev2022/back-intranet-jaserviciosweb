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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->text('descripcion');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedBigInteger('cliente_id')->nullable()->unsigned();
            $table->unsignedBigInteger('servicio_id')->nullable()->unsigned();
            $table->timestamps();
            $table->foreign('cliente_id')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('servicio_id')->references('id')->on('servicios')->onDelete('cascade');
            //TODO: Referenciar a colaboradores (1 a M) (tabla pivote)
            //TODO: Referenciar a Tarea (1 a M)
            //TODO: Referenciar tabla Estado_Proyecto (PENDIENTE, PREPARANDO, PROCESANDO, COMPLETADO, CANCELADO)
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
};
