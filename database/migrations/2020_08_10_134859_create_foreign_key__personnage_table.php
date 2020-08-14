<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyPersonnageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnages', function (Blueprint $table) {

            $table->foreign('id_race')->references('id')->on('Races')->onDelete('cascade');
            $table->foreign('id_classe')->references('id')->on('Classes')->onDelete('cascade');
            $table->foreign('id_armure')->references('id')->on('Armures')->onDelete('cascade');
            $table->foreign('id_specification')->references('id')->on('Specifications')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('Users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personnages',function(Blueprint $table)
        {
            $table->dropForeign('id_race');
            $table->dropForeign('id_classe');
            $table->dropForeign('id_armure');
            $table->dropForeign('id_specification');
            $table->dropForeign('id_user');
           }
        );
    }
}
