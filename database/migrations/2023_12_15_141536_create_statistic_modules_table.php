<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatisticModulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('statistic_modules', function (Blueprint $table) {
            $table->id();
            $table->float('watt')->default(0);
            $table->float('ampe')->default(0);
            $table->float('kwh')->default(0);
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_module');

            $table->timestamps();

            $table->foreign('id_user')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_module')->references('id')->on('modules')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('statistic_modules');
    }
}
