<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseRequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_requests', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->tinyInteger('frequency')->nullable();
            $table->integer('durationTime')->nullable();
            $table->tinyInteger('targetTop')->nullable();
            $table->tinyInteger('wishJob')->nullable();
            $table->tinyInteger('completeExercise')->nullable();
            $table->tinyInteger('outCondition')->nullable();
            $table->string('nowSkill')->nullable();
            $table->string('mission')->nullable();

            $table->foreignId('userId')->constrained('users');
            $table->foreignId('classId')->constrained('classes');

            $table->tinyInteger('status')->default(3);

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
        Schema::dropIfExists('course_requests');
    }
}
