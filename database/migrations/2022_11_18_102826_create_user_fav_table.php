<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_fav', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('user_id')->references('id')->on('libusers');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_fav');
    }
};
