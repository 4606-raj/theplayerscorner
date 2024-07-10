<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('players', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nationality')->nullable();
            $table->double('height')->nullable();
            $table->enum('height_unit', ['feet', 'cm'])->nullable();
            $table->double('weight')->nullable();
            $table->enum('weight_unit', ['lbs', 'kg'])->nullable();
            $table->string('location')->nullable();
            $table->boolean('consent_terms_of_use')->default(false);
            $table->boolean('consent_data_collection_privacy')->default(false);
            $table->string('photo')->nullable();
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
        Schema::dropIfExists('players');
    }
}
