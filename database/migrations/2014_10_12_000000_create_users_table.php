<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            //'cpf','rg'
            //'grupo_pet','ies','modalidade_alojamento',
            //'interesse_camiseta','interesse_festa'

            $table->string('cpf')->unique();
            $table->string('rg');
            $table->string('grupo_pet')->nullable();
            $table->string('ies')->nullable();
            $table->string('modalidade_alojamento');
            $table->string('interesse_camiseta');
            $table->string('interesse_festa');



            $table->rememberToken();
            $table->timestamps();

            // ---important----
            //foreign keys on 2017_06_21_135546_create_grupo_pets_table. migration
            //

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
