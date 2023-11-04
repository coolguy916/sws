<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EspControl extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('esp_controls', function (Blueprint $table) {
            $table->id();
            $table->time('runtime')->default('00:00:00');
            $table->boolean('status')->default('0');
            $table->time('schedule');
            $table->unsignedBigInteger('id_user')->unsigned();
            // $table->unsignedBigInteger('id_module')->unsigned();
            $table->timestamps();

            // $table->foreign('id_module')->references('id')->on('modules')->onDelete('cascade');
            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
