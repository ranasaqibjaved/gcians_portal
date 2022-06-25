<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feedetails', function (Blueprint $table) {

            $table->id();
            $table->string('semester');
            $table->string('program');
            $table->string('bank');
            $table->integer('vouchar_no');
            $table->string('Due_date');
            $table->integer('net_amount');
            $table->string('Vouchar_file');
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
        Schema::dropIfExists('feedetails');
    }
}
