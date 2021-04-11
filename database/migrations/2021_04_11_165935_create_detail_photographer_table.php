<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDetailPhotographerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detail_photographer', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_photographer');
            $table->string('nickname');
            $table->string('short_description');
            $table->string('address');
            $table->string('limit_time');
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
        Schema::dropIfExists('detail_photographer');
    }
}
