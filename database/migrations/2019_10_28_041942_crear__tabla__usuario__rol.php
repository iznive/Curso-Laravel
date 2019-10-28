<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaUsuarioRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_usuario_rol', function (Blueprint $table) {
            $table->increments('PK_UsuarioRol');
            $table->unsignedInteger('FK_Rol');
            $table->foreign('FK_Rol', 'FK_UsuarioRol_Rol')->references('PK_Rol')->on('t_roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('FK_Usuario');
            $table->foreign('FK_Usuario', 'FK_UsuarioRol_Usuario')->references('PK_Usuario')->on('t_usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->boolean('USr_Estado');
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
        Schema::dropIfExists('t_usuario_rol');
    }
}
