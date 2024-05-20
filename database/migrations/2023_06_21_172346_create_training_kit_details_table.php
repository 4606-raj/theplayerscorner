<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingKitDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_kit_details', function (Blueprint $table) {
            $table->id();
            $table->string('name_initials')->nullable();
            $table->string('jersey_id');
            $table->string('shorts_id');
            $table->string('drill_top_id');
            $table->string('pants_id');
            $table->string('socks_id');
            $table->boolean('conditions_confirmation')->defaul(false);
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
        Schema::dropIfExists('training_kit_details');
    }
}
