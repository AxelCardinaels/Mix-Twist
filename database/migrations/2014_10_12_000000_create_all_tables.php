<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAllTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {


        Schema::create('upvotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recette_id');
            $table->timestamps();
          });

        Schema::create('downvotes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('recette_id');
            $table->timestamps();
          });

        Schema::create('recettes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('plat1');
            $table->string('plat2');
            $table->string('pseudo');
            $table->string('email',255)->unique();
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
        Schema::dropIfExists('recettes','upvotes','downvotes');
    }
}
