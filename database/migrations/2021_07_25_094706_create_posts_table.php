<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {



            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id')   ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')  ;
            $table->boolean('accept')->default(false)   ;

            $table->string('title') ;
            $table->text('image_post') ;
            $table->text('description') ;
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
        Schema::dropIfExists('posts');
    }
}
