<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iafs', function (Blueprint $table) {
            // 'fname',
            // 'mobile',
            // 'date_of_birth',
            // 'date_of_admission',
            // 'gender',
            // 'session',
            // 'session_type',

            $table->id();
            $table->string('email');
            $table->string('fname');
            $table->string('mobile');
            $table->string('date_of_birth');
            $table->string('date_of_admission');
            $table->string('gender');
            $table->string('session');
            $table->string('session_type');
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
        Schema::dropIfExists('iafs');
    }
}
