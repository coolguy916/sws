<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWattsConsumptionsRealtimeTable extends Migration
{
        /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('watts_consumptions_scheduled', function (Blueprint $table) {
            $table->id(); // Primary key
            $table->float('kwh'); // Kilowatt-hours
            $table->float('power'); // Power in watts
            $table->unsignedBigInteger('id_user'); // Foreign key to the users table
            $table->unsignedBigInteger('id_module'); // Foreign key to the modules table
            $table->timestamps();

            // Setting up foreign key constraints
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
        Schema::dropIfExists('watts_consumptions_scheduled');
    }

}
