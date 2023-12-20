<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFootersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('footers', function (Blueprint $table) {
            $table->id();
            $table->text('image')->nullable();
            $table->text('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->text('alamat')->nullable();
            $table->text('email')->nullable();
            $table->text('phone')->nullable();
            $table->text('youtube')->nullable();
            $table->text('instagram')->nullable();
            $table->boolean('status');
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
        Schema::dropIfExists('footers');
    }
}
