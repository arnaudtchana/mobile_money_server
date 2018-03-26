<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameKiosqueServiceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //on renomme la table kiosque service pour la mettre sans s
        Schema::rename('kiosque_services', 'kiosque_service');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::rename('kiosque_service', 'kiosque_services');

    }
}
