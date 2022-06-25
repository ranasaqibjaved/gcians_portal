<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGhpsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ghps', function (Blueprint $table) {
           
            $table->id();
            $table->string('name');
            $table->string('fname');
            $table->string('age');
            $table->string('gender');
            $table->string('cnic');
            $table->string('mobile');
            $table->string('email');
            $table->string('blood_group');
            $table->string('address');
            $table->string('height');
            $table->string('blood_pressure');
            $table->string('temperature');
            $table->string('pulse_rate');
            $table->string('abnormality');
            $table->string('overall_health');
            $table->string('psychiatric_history');
            $table->string('decline_academic');
            $table->string('manifestation');
            $table->string('habit');
            $table->string('activities');
            $table->string('bullying');
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
        Schema::dropIfExists('ghps');
    }
}
