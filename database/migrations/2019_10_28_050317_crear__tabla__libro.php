<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CrearTablaLibro extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('t_libro', function (Blueprint $table) {
            $table->increments('PK_Libro');
            $table->string('Lib_Libro', 50);
            $table->string('Lib_Isbn', 30);
            $table->string('Lib_Autor', 100);
            $table->unsignedTinyInteger('Lib_Cantidad');
            $table->string('Lib_Editorial', 50)->nullable();
            $table->string('Lib_Foto', 100)->nullable();
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
        Schema::dropIfExists('t_libro');
    }
}
