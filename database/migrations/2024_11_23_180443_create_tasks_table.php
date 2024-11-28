<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); //Asigna un id automatico a la tarea
            $table->string('title',25); //Escribe el titulo de la tarea (Máximo 25 caracteres)
            $table->text('description'); //Agrega una descripción a la tarea de texto largo 
            $table->enum('status', ['pending', 'completed']); //Estados de la tarea pendiente y completo, dejando pendiente por defecto
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
        Schema::dropIfExists('tasks');
    }
}
