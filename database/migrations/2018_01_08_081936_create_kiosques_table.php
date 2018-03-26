<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKiosquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kiosques', function (Blueprint $table) {
            $table->increments('id');
            $table->string('quartier');
            $table->string('description');
            $table->double('latitude');
            $table->double('longitude');
            $table->integer('user_id')->unsigned()->index();
            $table->boolean('statut')->default(0);
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
        //
        Schema::drop('kiosques');
    }
}
