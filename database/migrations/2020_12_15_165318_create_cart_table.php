<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCartTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carts', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            // big incretment: big inter ,tu tang, unsgined
            $table->tinyInteger('count')->unique();
            $table->unsignedBigInteger('productId');
            // giong bigInccrement nhung ko tu tang
            $table->unsignedBigInteger('userId');
            $table->timestamps();
            $table->foreign('userId')->references('id')->on('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('carts');
    }
}
