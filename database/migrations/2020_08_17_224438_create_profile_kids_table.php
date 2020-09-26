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
           // $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('profile_parent_id')->unsigned();
            $table->string('name');
            $table->string('lastName');
            $table->integer('dni');
            $table->string('genre');
            $table->date('birthday');            
            $table->string('diagnostic');
            $table->string('socialMedicine')->nullable();
            $table->boolean('baja')->default(false);
            $table->timestamps();
            
            //$table->foreign('user_id')->references('id')->on('users')
            //    ->onDelete('cascade')
             //   ->onUpdate('cascade');
            
                $table->foreign('profile_parent_id')->references('id')->on('profile_parents')
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
        Schema::dropIfExists('profile_kids');
    }
}
