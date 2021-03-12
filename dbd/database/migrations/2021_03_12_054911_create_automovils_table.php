<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAutomovilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('automovils', function (Blueprint $table) {
            $table->id();
            $table->text('color');
            $table->text('patente');
            $table->text('año');
            $table->text('modelo');
            $table->integer('valorRenta');
            $table->boolean('disponibilidad')->chage();
            $table->timestamps();
            $table->boolean('delete');

            //Foraneas
            $table->unsignedBigInteger('id_sucursals')->nullable();
            $table->foreign('id_sucursals')->references('id')->on('sucursals');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('automovils');
    }
}
