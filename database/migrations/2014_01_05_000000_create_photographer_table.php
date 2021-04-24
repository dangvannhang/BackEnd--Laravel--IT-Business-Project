<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePhotographerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photographer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_photographer');
            $table->string('nickname')->nullable();
            $table->string('studio_address')->nullable();
            $table->string('limitation_time')->nullable();
            $table->string('descript')->nullable();
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
        Schema::dropIfExists('photographer');
    }
}
