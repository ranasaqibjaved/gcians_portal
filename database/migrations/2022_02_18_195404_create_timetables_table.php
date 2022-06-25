<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimetablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('timetables', function (Blueprint $table) {
           
            $table->id();
            $table->string('semester');
            $table->string('course_code');
            $table->string('teacher_name');
            $table->string('location');
            $table->string('monday');
            $table->string('tuesday');
            $table->string('wednesday');
            $table->string('thurday');
            $table->string('friday');
            $table->string('saturday');
            $table->string('sunday');
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
        Schema::dropIfExists('timetables');
    }
}
