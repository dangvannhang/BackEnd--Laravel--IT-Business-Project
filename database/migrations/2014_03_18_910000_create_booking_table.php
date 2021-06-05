<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_customer');
            $table->foreignId('id_photographer');
            $table->foreignId('id_combo');

            $table->foreignId('id_voucher')->references('id')->on('voucher');

            $table->date('start_time');

            $table->integer('time_booking');

            $table->string('price');
            $table->integer('booking_status')->default(1);
            $table->boolean('is_finish')->default(0);
            $table->string('booking_address');
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
        Schema::dropIfExists('booking');
    }
}

