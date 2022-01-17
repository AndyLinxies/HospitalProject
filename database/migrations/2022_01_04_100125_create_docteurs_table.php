<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocteursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docteurs', function (Blueprint $table) {
            $table->id();
            $table->string('nomDoc');
            $table->integer('experience');
            $table->string('specialisation');
            //Docteur et consultation manyToMany consultation_docteur
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
        Schema::dropIfExists('docteurs');
    }
}
