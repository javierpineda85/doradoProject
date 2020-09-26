<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->bigInteger('profile_kid_id')->unsigned();
            $table->string('street');
            $table->integer('street_number');
            $table->integer('street_house')->nullable();
            $table->string('locality');
            $table->string('city');

            $table->timestamps();

            $table->foreign('profile_kid_id')->references('id')->on('profile_kids')
            ->onDelete('cascade')
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
        Schema::dropIfExists('locations');
    }
}
