<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('neds', function (Blueprint $table) {
            $table->id();
            
            $table->string('name');
            $table->string('email');
            $table->string('fname');
            $table->string('mobile');
            $table->string('date_of_birth');
            $table->string('date_of_admission');
            $table->string('gender');
            $table->string('opinion');

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
        Schema::dropIfExists('neds');
    }
}
