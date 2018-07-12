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
            // $table->string('first_name');
            // $table->string('middle_name');
            // $table->string('last_name');
            $table->string('name');
            $table->integer('age')->nullable();
            $table->string('adrress')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('profile_pic')->nullable();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('account_type')->default('client');
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