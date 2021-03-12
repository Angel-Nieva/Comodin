<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosRolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuario_rols', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->boolean('delete');
            
            //Foraneas
            $table->unsignedBigInteger('id_usuarios')->nullable();
            $table->foreign('id_usuarios')->references('id')->on('usuarios');

            $table->unsignedBigInteger('id_rols')->nullable();
            $table->foreign('id_rols')->references('id')->on('rols');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios_rols');
    }
}
