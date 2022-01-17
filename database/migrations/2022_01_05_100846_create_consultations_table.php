<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsultationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Relie patient et docteur
        Schema::create('consultations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->foreignId('docteur_id')->constrained();
            $table->string('consultDate');
            $table->string('consultTime');
            //Le statut de la consultation est dans une table anexe oneToMany
            $table->foreignId('consultation_statu_id')->constrained();
            //une consultation se passe dans un local oneTomany
            $table->foreignId('local_id')->constrained();
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
        Schema::dropIfExists('consultations');
    }
}
