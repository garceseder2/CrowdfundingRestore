<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->string('id_document')->nullable();
            $table->string('birthday')->nullable();
            $table->string('gender')->nullable();
            $table->string('adders_1')->nullable();
            $table->string('adders_2')->nullable();
            $table->string('country')->nullable();
            $table->string('stade')->nullable();
            $table->string('city')->nullable();
            $table->string('postalcode')->nullable();
            $table->float('balance_wallet')->default(0);
            $table->enum('type', ['menber', 'admin'])->default('menber');
            
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
        Schema::dropIfExists('users');
    }
}
