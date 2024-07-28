<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerPlayingDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_playing_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('morph_position_id');
            $table->foreignId('morph_second_position_id');
            $table->foreignId('morph_foot_id');
            $table->json('morph_trait_id');
            $table->foreignId('player_id')->constrained();
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
        Schema::dropIfExists('player_playing_details');
    }
}
