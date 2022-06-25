<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentresultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentresults', function (Blueprint $table) {
            $table->id();
            $table->string('semester');
            $table->string('course_code');
            $table->string('teacher_name');
            $table->string('email');
            $table->float('Sem_work');
            $table->float('Mid_term');
            $table->float('Theory');
            $table->float('Practical');
            $table->float('Total');
            $table->float('Maximum');
            $table->string('Grade');
            $table->string('Q_P');
            $table->float('Marks_P');
            $table->float('Attendence_P');
            $table->string('Remarks');
            $table->float('CGPA');
            $table->float('GPA');
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
        Schema::dropIfExists('studentresults');
    }
}
