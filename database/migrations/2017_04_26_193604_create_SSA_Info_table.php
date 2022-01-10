<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSSAInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('info', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contact');
            $table->string('fb_link');
            $table->string('twitter_link');
            $table->string('youtube_link');
            $table->string('googleplus_link');
            $table->string('email');
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
        Schema::drop('Info');
    }
}
