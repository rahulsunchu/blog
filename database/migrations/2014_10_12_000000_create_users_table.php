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
            $table->date('dob')->nullable();
            $table->string('designation')->nullable();
            $table->string('password');
            $table->string('profilepic')->nullable();
            $table->string('edulevel')->nullable();
            $table->string('college')->nullable();
            $table->string('bloodgroup')->nullable();
            $table->integer('phone')->nullable();
            $table->rememberToken();
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
