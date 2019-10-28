<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_usuario', function (Blueprint $table) {
            $table->increments('PK_Usuario');
            $table->string('Usu_Usuario', 50);
            $table->string('Usu_Password', 100);
            $table->string('Usu_Nombre', 50);
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
        Schema::dropIfExists('t_usuario');
    }
}
