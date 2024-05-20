<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNewFieldsToPlayersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('players', function (Blueprint $table) {
            $table->string('photo')->nullable();
            $table->string('document')->nullable();
            $table->string('heard_from');
            $table->foreignId('age_categories_id')->constrained();
            $table->string('school_name');
            $table->string('gender');
            $table->string('religion');
            $table->string('ethnicity');
            $table->boolean('has_disability')->defaul(false);
            $table->string('impact_of_disability')->nullable();
            $table->foreignId('school_group_id')->constrained();
            $table->string('address');
            $table->boolean('is_registered_with_another_club')->default(false);
            $table->string('another_club_name')->nullable();
            $table->string('FA_number')->nullable();
            $table->string('medical_details')->nullable();
            $table->enum('interested_FA_referee', [0, 1, 2])->comment('0: no, 1: yes, 2: maybe');
            $table->enum('interested_FA_coaching', [0, 1, 2])->comment('0: no, 1: yes, 2: maybe');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('players', function (Blueprint $table) {
            //
        });
    }
}
