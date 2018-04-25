<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConcernersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('concerners', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('piece_id')->unsigned();
            $table->foreign('piece_id')->references('id')->on('pieces');

            $table->integer('renouvellement_id')->unsigned();
            $table->foreign('renouvellement_id')->references('id')->on('renouvellements');
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
        Schema::dropIfExists('concerners');
    }
}
