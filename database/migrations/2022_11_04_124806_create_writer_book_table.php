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
        Schema::create('writer_book', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->bigInteger('book_id')->unsigned();
            $table->bigInteger('writer_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books');
            $table->foreign('writer_id')->references('id')->on('writer');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('writer_book');
    }
};
