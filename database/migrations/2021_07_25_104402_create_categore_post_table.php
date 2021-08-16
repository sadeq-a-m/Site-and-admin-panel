<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategorePostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categore_post', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('post_id')   ;
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')  ;


            $table->unsignedBigInteger('categore_id')   ;
            $table->foreign('categore_id')->references('id')->on('categores')->onDelete('cascade')  ;


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
        Schema::dropIfExists('categore_post');
    }
}
