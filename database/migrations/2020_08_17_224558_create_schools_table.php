<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('profile_kid_id')->unsigned();
            $table->string('school_name');
            $table->string('school_level');
            $table->string('school_turn');
            $table->string('schedule');
            $table->string('street');
            $table->integer('street_number');
            $table->string('locality');
            $table->string('city');
            $table->string('phone')->nullable();
            $table->string('contact_name')->nullable();
            $table->string('contact_phone')->nullable();

            $table->timestamps();

            $table->foreign('profile_kid_id')->references('id')->on('profile_kids');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('schools');
    }
}
