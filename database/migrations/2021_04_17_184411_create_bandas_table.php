<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('bandas', function (Blueprint $table) {
            $table->id();
            $table->string('titulo');
            $table->string('anno_fundacion');
            $table->text('integrantes');
            $table->text('biografia');
            $table->string('imagen');

            $table->foreignId('genero_id')->references('id')->on('generos')->comment('El genero de la banda');

            $table->foreignId('user_id')->references('id')->on('users')->comment('El usuario que creo el registro de la banda en la base de datos ');

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
        Schema::dropIfExists('bandas');
    }
}
