<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movie_info', function (Blueprint $table) {
            $table->id('id_movie_info');

            $table->foreignId("id_movies")
                    ->references("id_movies")
                    ->on("movies")
                    ->onUpdate('cascade');

            $table->foreignId("id_actor")
                    ->references("id_actor")
                    ->on("actors")
                    ->onUpdate('cascade');
                
            $table->foreignId("id_director")
                    ->unique()
                    ->references("id_director")
                    ->on("directors")
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movie_infos');
    }
};
