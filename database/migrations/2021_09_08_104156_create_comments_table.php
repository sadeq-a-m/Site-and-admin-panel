<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {

            $table->bigIncrements('id');

            $table->unsignedBigInteger('user_id') ;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade') ;
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('commentable_id')->unsigned();
            $table->string('commentable_type');
            $table->integer('like')->default(0);
            $table->integer('dislike')->default(0);
            $table->text('comment') ;

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
        Schema::dropIfExists('comments');
    }
}
