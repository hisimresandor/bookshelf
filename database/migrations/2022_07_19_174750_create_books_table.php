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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->tinyText('title');
            $table->mediumText('writers');
            $table->tinyText('publisher');
            $table->tinyText('country');
            $table->tinyText('category');
            $table->string('price');
            $table->string('language');
            $table->integer('year');
            $table->integer('pages');
            $table->integer('read_pages');
            // $table->boolean('lent');
            $table->text('picture');
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
        Schema::dropIfExists('books');
    }
};
