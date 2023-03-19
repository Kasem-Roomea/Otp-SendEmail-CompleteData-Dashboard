<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRoomStaysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('room_stays', function (Blueprint $table) {
            $table->id();
            $table->date('CheckIn');
            $table->date('CheckOut');
            $table->string('TypeRoom');
            $table->date('CheckInExtra');
            $table->date('CheckOutExtra')->nullable();
            $table->string('TypeRoomExtra')->nullable();
            $table->bigInteger('Passenger_id')->unsigned();
            $table->foreign('Passenger_id')->references('id')->on('information_passengers');
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
        Schema::dropIfExists('room_stays');
    }
}
