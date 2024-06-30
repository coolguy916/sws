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
            $table->json('icon_tulisan')->nullable();
            $table->json('keterangan')->nullable();
            $table->json('icon_link')->nullable();
            $table->json('link')->nullable();
            $table->json('nama_link_website')->nullable();
            $table->json('link_website')->nullable();
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
