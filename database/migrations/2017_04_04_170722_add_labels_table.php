<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddLabelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crw_labels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('label');
            //$table->integer('id_project')->unsigned();
            //$table->foreign('id_project')->references('id')->on('crw_projects')->onDelete('cascade');
            $table->timestamps();
        });
        
        Schema::create('label_project', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('label_id')->unsigned();
            $table->integer('project_id')->unsigned();
            
            //$table->foreign('id_project')->unsigned();
            $table->foreign('label_id')->references('id')->on('crw_labels')->onDelete('cascade');
            $table->foreign('project_id')->references('id')->on('crw_projects')->onDelete('cascade');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('label_project');
        Schema::drop('crw_labels');
    }
}
