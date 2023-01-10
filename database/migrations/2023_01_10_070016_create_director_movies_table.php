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
        Schema::create('director_movie', function (Blueprint $table) {
            $table->id('id_director_movie');

            $table->foreignId("id_movies")
                    ->unique()
                    ->references("id_movies")
                    ->on("movies")
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
        Schema::dropIfExists('direcotr__movies');
    }
};
