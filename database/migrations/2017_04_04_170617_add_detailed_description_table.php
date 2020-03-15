<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDetailedDescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('crw_detailed_description', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('stage');
            $table->integer('time_month');
            $table->float('cost');
            $table->text('description');
            $table->integer('project_id')->unsigned();  
            $table->foreign('project_id')->references('id')->on('crw_projects')->onDelete('cascade');
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
        Schema::drop('crw_detailed_description');
    }
}
