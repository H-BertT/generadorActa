<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personas', function (Blueprint $table) {
            $table->id();
            $table->string('nombres');
            $table->string('primer_apellido');
            $table->string('segundo_apellido')->nullable();
            $table->string('entidad_nacimiento');
            $table->string('municipio_nacimiento');
            $table->string('nacionalidad');
            $table->string('estado_civil')->default('Soltero');
            $table->enum('sexo', ['Masculino', 'Femenino']);
            $table->integer('edad');
            $table->string('padre')->nullable();
            $table->string('madre')->nullable();
            $table->string('nacionalidad_padre')->nullable();
            $table->string('nacionalidad_madre')->nullable();
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
        Schema::dropIfExists('personas');
    }
}
