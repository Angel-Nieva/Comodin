<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArriendosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('arriendos', function (Blueprint $table) {
            $table->id();
            $table->integer('tiempo');
            $table->timestamps();
            $table->boolean('delete');

            //Foraneas
            $table->unsignedBigInteger('id_usuarios')->nullable();
            $table->foreign('id_usuarios')->references('id')->on('usuarios');

            $table->unsignedBigInteger('id_automovils')->nullable();
            $table->foreign('id_automovils')->references('id')->on('automovils');                        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('arriendos');
    }
}
