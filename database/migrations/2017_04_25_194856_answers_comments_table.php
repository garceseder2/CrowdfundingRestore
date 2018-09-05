<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AnswersCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crw_answers_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('answer');
            $table->integer('comments_id')->unsigned();
            $table->integer('user_id')->unsigned();  
            $table->foreign('comments_id')->references('id')->on('crw_comments')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('crw_answers_comments');
    }
}
