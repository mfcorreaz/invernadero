<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLecturasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lecturas', function (Blueprint $table) {
            $table->id();

            $table->integer('temperatura');
            $table->integer('humedad');
            $table->integer('suelo');

            //creamos campos foraneos
                $table->unsignedBigInteger('producto_id');

            //creamos relaciones con otras tablas

            $table->foreign('producto_id')->references('id')->on('productos');
            

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
        Schema::dropIfExists('lecturas');
    }
}
