<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerson extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('table_person', function (Blueprint $table) {
            $table->increments('id');
            $table->date ('birthdate');
            $table->string('name', 200);
            $table->string('genre', 200);
            $table->integer('postal_cold');
            $table->string('addres', 200);
            $table->integer('number');
            $table->string('neighborhood', 200);
            $table->text('complement');
            $table->string('city', 200);
            $table->string('state', 200);
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
        Schema::dropIfExists('table_person');
    }
}
