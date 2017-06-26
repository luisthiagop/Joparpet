<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGrupoPetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos_pet', function (Blueprint $table) {
            $table->increments('id');

            //'nome','cidade','estado','descricao'

            $table->string('nome');
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('descricao')->nullable();


            $table->timestamps();
        });

        Schema::table('users', function ($table) {
            $table->integer('grupo_pet_id')->unsigned()->nullable();
            $table->foreign('grupo_pet_id')->references('id')->on('grupos_pet')->onDelete('cascade');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos_pet');
    }
}
