<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHopitalLocalLocalTypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hopital_local_local_type', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hopital_id')->constrained();
            $table->foreignId('local_id')->constrained();
            $table->foreignId('local_type_id')->constrained();
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
        Schema::dropIfExists('hopital_local_local_types');
    }
}
