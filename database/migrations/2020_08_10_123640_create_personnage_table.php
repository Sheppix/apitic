<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonnageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('personnage', function (Blueprint $table) {
            $table->id();
            $table->string('nom_personnage');
            $table->bigInteger('id_race')->unsigned();
            $table->bigInteger('id_classe')->unsigned();
            $table->bigInteger('id_armure')->unsigned();
            $table->bigInteger('id_specification')->unsigned();
         
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
        Schema::dropIfExists('personnage');
      
    }
}
