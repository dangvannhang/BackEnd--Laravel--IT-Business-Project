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
            $table->integer('is_cancel')->default(0);
            $table->foreignId('id_voucher');
            $table->string('start_time');
            $table->string('end_time');
            $table->string('price');
            $table->integer('booking_status')->default(0);
            $table->boolean('is_finish')->default(0);
            $table->string('booking_address')->nullable();
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

