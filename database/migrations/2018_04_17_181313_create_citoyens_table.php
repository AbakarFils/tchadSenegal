<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCitoyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('citoyens', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nom');
            $table->string('prenom');
            $table->string('pere');
            $table->string('mere');
            $table->string('domicile');
            $table->string('mail')->nullable();
            $table->string('phone');
            $table->string('genre');
            $table->string('num_person_contact');
            $table->string('profession');
            $table->date('date_naissance');
            $table->string('lieu_naissance');
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
        Schema::dropIfExists('citoyens');
    }
}
