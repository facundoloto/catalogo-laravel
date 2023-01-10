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
            Schema::create('actor_movie', function (Blueprint $table) {
                $table->id('id_actor_movie');
    
                $table->foreignId("id_movies")
                        ->references("id_movies")
                        ->on("movies")
                        ->onUpdate('cascade');
    
                $table->foreignId("id_actor")
                        ->references("id_actor")
                        ->on("actors")
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
        Schema::dropIfExists('actor_movies');
    }
};
