<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Manicure extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            
            $table->string('nome');
            $table->integer('tipo');
            $table->timestamps();
       });


       Schema::create('dados', function (Blueprint $table) {
        $table->increments('id');
        $table->string('email');
        $table->string('celular');
        $table->string('bairro');
        $table->string('cep');
        $table->string('endereco');
        $table->string('habilidades');
        $table->timestamps();
   });


   Schema::create('album', function (Blueprint $table) {
    $table->primary('id')->unsigned();;
    $table->string('titulo');
    $table->string('descricao');
    $table->timestamps();
});


Schema::create('galeria', function (Blueprint $table) {
    $table->primary('id')->unsigned();;
    $table->string('titulo');
    $table->string('descricao'); 
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
        //
    }
}
