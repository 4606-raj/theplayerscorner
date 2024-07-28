<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerClubDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_club_details', function (Blueprint $table) {
            $table->id();
            $table->string('supported_team');
            $table->foreignId('morph_current_level_id');
            $table->foreignId('morph_highest_level_id');
            $table->string('current_club')->nullable();
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
        Schema::dropIfExists('player_club_details');
    }
}
