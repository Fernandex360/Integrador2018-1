<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('denuncias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipoIncidente');
            $table->date('fecha');
            $table->text('descripcion');
            $table->string('evidencia');
            $table->enum('estado',['confirmado','eliminado']);
            $table->double('latitud',20,10);
            $table->double('longitud',20,10);
            $table->unsignedInteger('id_distrito');
            $table->foreign('id_distrito')->references('id')->on('distritos');
            $table->unsignedInteger('id_denunciante');
            $table->foreign('id_denunciante')->references('id')->on('users');
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
        Schema::dropIfExists('denuncias');
    }
}
