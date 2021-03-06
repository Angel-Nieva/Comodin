<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRolsPermisosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rol_permisos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('delete');
            
            //Foraneas
            $table->unsignedBigInteger('id_rols')->nullable();
            $table->foreign('id_rols')->references('id')->on('rols');

            $table->unsignedBigInteger('id_permisos')->nullable();
            $table->foreign('id_permisos')->references('id')->on('permisos');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rols_permisos');
    }
}
