<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class WalleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('balance');
            $table->string('transaction');
            $table->timestamps();
            $table->integer('user_id')->unsigned();  
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
        
        Schema::create('project_wallet', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('wallet_id')->unsigned();
            $table->integer('project_id')->unsigned();
            
            //$table->foreign('id_project')->unsigned();
            $table->foreign('wallet_id')->references('id')->on('wallet')->onDelete('cascade');
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
        Schema::drop('project_wallet');
        Schema::drop('wallet');
    }
}
