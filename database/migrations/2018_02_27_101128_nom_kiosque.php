<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NomKiosque extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //le kiosque doit avoir un nom unique en base de donnee
        Schema::table('kiosques', function ($table) {
            $table->string('nom_kiosque')->unique();
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
            $table->dropColumn('nom_kiosque');
        });
    }
}
