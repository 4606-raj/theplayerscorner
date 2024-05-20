<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerGuardiansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player_guardians', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->date('dob');
            $table->foreignId('relation_id');
            $table->string('address');
            $table->string('home_phone_number');
            $table->string('mobile_phone_number');
            $table->string('email');
            $table->string('occupation');
            $table->string('FA_number');
            $table->enum('type', [0, 1])->default(0)->comment('0: main, 1: optional');
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
        Schema::dropIfExists('player_guardians');
    }
}
