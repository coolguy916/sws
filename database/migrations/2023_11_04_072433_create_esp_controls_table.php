<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEspControlsTable extends Migration
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
            $table->integer('runtime');
            $table->time('schedule');
            $table->boolean('status')->default(0);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_module');
            $table->timestamps();

            $table->foreign('id_module')->references('id')->on('modules')->onDelete('cascade');
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
        Schema::dropIfExists('esp_controls');
    }
}
