<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_pessoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date ('birthdate');
            $table->string('name');
            $table->string('genre');
            $table->integer('postal_cold');
            $table->string('addres');
            $table->integer('number');
            $table->string('neighborhood');
            $table->text('complement');
            $table->string('city');
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
        Schema::dropIfExists('_pessoa');
    }
}
