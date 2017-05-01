<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommitteeMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('committee_members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('designation');
            $table->string('contact');
            $table->string('info');
            $table->integer('rank');
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
        Schema::drop('committee_members');
    }
}
