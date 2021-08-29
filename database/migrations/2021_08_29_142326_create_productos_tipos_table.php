<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductosTiposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos_tipos', function (Blueprint $table) {
            $table->id();
            //creamos nuestros campos foraneos en nuestra tabla intermedia
            $table->unsignedBigInteger('producto_id');
            $table->unsignedBigInteger('tipo_id');

            //creamos las relaciones con las otras tablas

            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');
            $table->foreign('tipo_id')->references('id')->on('tipos')->onDelete('cascade');

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
        Schema::dropIfExists('productos_tipos');
    }
}
