<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaPermisoRol extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_permiso_rol', function (Blueprint $table) {
            $table->increments('PK_PermisoRol');
            $table->unsignedInteger('FK_Rol');
            $table->foreign('FK_Rol', 'FK_PermisoRol_Rol')->references('PK_Rol')->on('t_roles')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('FK_Permiso');
            $table->foreign('FK_Permiso', 'FK_PermisoRol_Usuario')->references('PK_Permiso')->on('t_permiso')->onDelete('restrict')->onUpdate('restrict');
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
        Schema::dropIfExists('t_permiso_rol');
    }
}
