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
        Schema::table('foreign_key__personnage', function (Blueprint $table) {

            $table->foreign('id_race')->references('id')->on('Race')->onDelete('cascade');
            $table->foreign('id_classe')->references('id')->on('Classe')->onDelete('cascade');
            $table->foreign('id_armure')->references('id')->on('Armure')->onDelete('cascade');
            $table->foreign('id_specification')->references('id')->on('Specification')->onDelete('cascade');
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
            $table->dropForeign('personnage_id_race_foreign');
            $table->dropForeign('personnage_id_classe_foreign');
            $table->dropForeign('personnage_id_armure_foreign');
            $table->dropForeign('personnage_id_specification_foreign');
           }
        );
    }
}
