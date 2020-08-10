<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateForeignKeyClasseTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('foreign_key_classe', function (Blueprint $table) {

            $table->foreign('id_spe_classe')->references('id')->on('Spe_classe')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('classe',function(Blueprint $table)
        {
            $table->dropForeign('classe_id_spe_classe_foreign');
        }
    );
    }
}
