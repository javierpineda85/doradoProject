<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_profs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('user_id')->unsigned();
            $table->integer('dni');
            $table->integer('cuil');
            $table->date('birthday');
            $table->string('street');
            $table->string('street_number');
            $table->string('street_house');           
            $table->string('phone');
            $table->string('specialty')->nullable();
            $table->integer('matricula');
            $table->date('venc_matricula');
            $table->integer('rnp');
            $table->date('venc_rnp');
            $table->boolean('baja')->default(false);
            $table->timestamps();
            
            $table->foreign('user_id')->references('id')->on('users')
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
        Schema::dropIfExists('profile_profs');
    }
}
