<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibroPrestamo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_libro_prestamo', function (Blueprint $table) {
            $table->increments('PK_PrestamoLibro');
            $table->unsignedInteger('FK_Usuario');
            $table->foreign('FK_Usuario', 'FK_Libro_Usuario')->references('PK_Usuario')->on('t_usuario')->onDelete('restrict')->onUpdate('restrict');
            $table->unsignedInteger('FK_Libro');
            $table->foreign('FK_Libro', 'FK_Prestamo_Libro')->references('PK_Libro')->on('t_libro')->onDelete('restrict')->onUpdate('restrict');
            $table->date('LPr_FechaPrestamo');
            $table->string('LPr_PrestadoA', 100);
            $table->boolean('LPr_Estado');
            $table->date('LPr_FechaDev')->nullable();
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
        Schema::dropIfExists('t_libro_prestamo');
    }
}
