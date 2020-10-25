<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProfileKidsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile_kids', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('profile_parent_id')->nullable()->unsigned();
            $table->string('name');
            $table->string('lastName');
            $table->string('file',128)->nullable();
            $table->integer('dni');
            $table->string('genre');
            $table->date('birthday');            
            $table->string('diagnostic');
            $table->string('socialMedicine')->nullable();
            $table->string('afiliado')->nullable();
            $table->date('ingreso');
            $table->enum('baja',['ACTIVE','DOWN'])->default('ACTIVE');
            $table->timestamps();

            
           // $table->foreign('profile_parent_id')->references('id')->on('profile_parents');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('profile_kids');
    }
}
