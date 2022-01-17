<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('nomPatient');
            $table->string('prenom');
            $table->string('naissance');
            $table->bigInteger('registreNr');
            $table->string('genre');
            $table->string('adresse');
            $table->string('pays');
            $table->string('ville');
            $table->integer('codePostal');
            $table->string('phone');
            $table->string('contactPers');
            $table->string('contactPersPhone');
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
        Schema::dropIfExists('patients');
    }
}
