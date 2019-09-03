<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTokenCounterTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('token_counter', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignCascade('user', 'users');
            $table->foreignCascade('category', 'categories');
            $table->foreignNullable('customer', 'customers');
            $table->foreignNullable('token', 'tokens');
            $table->foreignCascade('counter', 'counters');
            $table->dateTime('start_time');
            $table->dateTime('end_time');
            $table->audit();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('token_counter');
    }
}
