<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDossmedicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dossmedics', function (Blueprint $table) {
            $table->id();
            //patient maladie manyToMany

            //Consultation qui a donné le diagnostic one to one
            $table->foreignId('consultation_id')->constrained();
            //status du dossmedic 
            $table->foreignId('dossmedic_statu_id')->constrained();
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
        Schema::dropIfExists('dossmedics');
    }
}
