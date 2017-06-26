<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsuarioHasRestricaoAlimentarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_has_restricao_alimentar', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();


            //foreign keys
            $table->integer('user_id')->unsigned();
            $table->integer('restricao_alimentar_id')->unsigned();

            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('restricao_alimentar_id')->references('id')->on('restricoes_alimentares')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_has_restricao_alimentar');
    }
}
