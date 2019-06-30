<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('subject');
            $table->text('description');

            $table->unsignedBigInteger('status_id');
            $table->foreign('status_id')->references('id')->on('statuses');

            // $table->unsignedBigInteger('client_id');
            // $table->foreign('client_id')->references('id')->on('clients');

            // $table->unsignedBigInteger('category2_id');
            // $table->foreign('category2_id')->references('id')->on('category2s');

            // $table->unsignedBigInteger('status_id');
            // $table->foreign('status_id')->references('id')->on('statuses');

            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('users');

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
        Schema::dropIfExists('tickets');
    }
}
