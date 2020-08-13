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
        Schema::create('personnages', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo')->unique();
            $table->bigInteger('id_race')->unsigned()->nullable();
            $table->bigInteger('id_classe')->unsigned()->nullable();
            $table->bigInteger('id_armure')->unsigned()->nullable();
            $table->bigInteger('id_specification')->unsigned()->nullable();
            $table->bigInteger('id_user')->unsigned()->nullable();
         
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
        Schema::dropIfExists('personnages');
      
    }
}
