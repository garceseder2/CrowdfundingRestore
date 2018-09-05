<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crw_projects', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_project');
            $table->integer('category_id')->nullable()->unsigned();
            $table->text('general_description');
            $table->text('bussines_potential');
            $table->float('collection_time');
            $table->float('percentage_gain');
            $table->float('TIR')->nullable();
            $table->integer('user_id')->nullable()->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('crw_category')->onDelete('cascade');
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
        Schema::drop('crw_projects');
    }
}
