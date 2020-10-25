<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('histories', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->bigInteger('user_id')->unsigned();
            $table->bigInteger('profile_kid_id')->unsigned();
            $table->string('tracking_number');
            $table->date('date');
            $table->mediumText('body'); 
            $table->string('priority');
            $table->enum('status',['PUBLISHED','DRAF'])->default('PUBLISHED');
             $table->timestamps();

            
            /* $table->foreign('user_id')->references('id')->on('users')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            
            $table->foreign('profile_kid_id')->references('id')->on('profile_kids')
                    ->onDelete('cascade')
                    ->onUpdate('cascade'); */
            


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('histories');
    }
}
