<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // ten truong phai la tieng anh va viet theo kieu lac da
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->string('fullName', 50);
            $table->integer('birthday')->nullable();
            $table->string('email', 128)->unique();
            $table->string('phoneNumber')->unique()->nullable();
            $table->string('job')->nullable();
            $table->string('avatar')->nullable();
            $table->string('facebook')->unique()->nullable();
            $table->tinyInteger('gender')->nullable();
            $table->string('country')->nullable();
            // value = 1 => admin; value = 2 => user_course
            $table->tinyInteger('role')->nullable();
            $table->tinyInteger('status')->default(STATUS_USER_PENDING);
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
