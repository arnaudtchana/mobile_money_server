<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Villemigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //permet de faciliter la recherche dun point donne pour eviter de boucler sur
        //toute la base de donnee
        Schema::table('kiosques', function ($table) {
            $table->string('ville');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('kiosques', function ($table) {
            $table->dropColumn('ville');
        });
    }
}
