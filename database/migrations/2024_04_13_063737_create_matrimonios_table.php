<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMatrimoniosTable extends Migration
{
    public function up()
    {
        Schema::create('matrimonios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('persona1_id');
            $table->unsignedBigInteger('persona2_id');
            $table->timestamps();

            $table->foreign('persona1_id')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('persona2_id')->references('id')->on('personas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('matrimonios');
    }
}
