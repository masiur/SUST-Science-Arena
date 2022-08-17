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
            $table->string('contact')->nullable();
            $table->string('info');
            $table->integer('rank')->comment('rank 1 gets high priority');
            $table->string('year');
            $table->integer('nth_of_committee')->nullable();
            $table->enum('status', ['ACTIVE', 'INACTIVE'])->default('ACTIVE');
            $table->string('photo')->default('img/propic.png');
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
