<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crw_comments', function (Blueprint $table) {
            $table->increments('id');
            $table->text('comment');
            $table->integer('project_id')->unsigned();  
            $table->integer('user_id')->unsigned();  
            $table->foreign('project_id')->references('id')->on('crw_projects')->onDelete('cascade');
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
        Schema::drop('crw_comments');
    }
}
