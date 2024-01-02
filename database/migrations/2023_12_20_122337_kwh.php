<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Kwh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kwh', function (Blueprint $table) {
            $table->id();
            $table->float('kwh');
            $table->float('power');
            $table->float('arus');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_module');
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
        Schema::dropIfExists('kwh');
    }
}
