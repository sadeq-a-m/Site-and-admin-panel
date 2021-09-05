<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEpisodesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('episodes', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('post_id')   ;
            $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade')  ;

            $table->integer('episode')->unique()    ;
            $table->string('title') ;
            $table->boolean("is_free")->default(true)  ;
            $table->text('video')   ;
            $table->float('value')  ;

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
        Schema::dropIfExists('episodes');
    }
}
