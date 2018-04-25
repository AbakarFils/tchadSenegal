<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAppartenirsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartenirs', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('formalite_id')->unsigned();
            $table->foreign('formalite_id')->references('id')->on('formalites');

            $table->integer('piece_id')->unsigned();
            $table->foreign('piece_id')->references('id')->on('pieces');
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
        Schema::dropIfExists('appartenirs');
    }
}
