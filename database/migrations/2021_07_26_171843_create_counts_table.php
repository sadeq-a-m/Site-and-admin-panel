<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCountsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('counts', function (Blueprint $table) {
            $table->bigIncrements('id');


            $table->unsignedInteger('view_users')->default(0)   ;
            $table->unsignedInteger('view_posts')->default(0)   ;

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
        Schema::dropIfExists('counts');
    }
}
