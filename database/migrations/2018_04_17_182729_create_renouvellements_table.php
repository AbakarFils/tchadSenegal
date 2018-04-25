<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRenouvellementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renouvellements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('libelle');

            $table->integer('formalite_id')->unsigned();
            $table->foreign('formalite_id')->references('id')->on('formalites');
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
        Schema::dropIfExists('renouvellements');
    }
}
