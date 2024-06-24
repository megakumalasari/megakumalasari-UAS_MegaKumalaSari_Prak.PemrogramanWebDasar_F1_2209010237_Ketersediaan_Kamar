<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('roompatient', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('room_id');
            $table->unsignedBigInteger('patient_id');
            $table->datetime('check_in');
            $table->datetime('check_out')->nullable();
            $table->timestamps();

            $table->foreign('room_id')->references('id')->on('room');
            $table->foreign('patient_id')->references('id')->on('patient');
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('roompatient');
    }

};
