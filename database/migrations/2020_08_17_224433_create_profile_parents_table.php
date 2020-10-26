<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileParentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_parents', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->nullable()->unsigned();
            $table->integer('profile_kid_id')->nullable()->unsigned();
            $table->string('parentName');
            $table->string('parentLastname');
            $table->integer('parentDni')->nullable();           
            $table->string('numberPhone');
            $table->string('phone2')->nullable();
            $table->enum('baja',['ACTIVE','DOWN'])->default('ACTIVE');
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_parents');
    }
}
