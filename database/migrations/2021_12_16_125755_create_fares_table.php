<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fares', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('career_level_id')->unsigned();
            $table->foreign('career_level_id')->references('id')->on('career_levels')->onDelete('cascade');
            $table->integer('order_service_id')->unsigned();
            $table->foreign('order_service_id')->references('id')->on('order_services')->onDelete('cascade');

            $table->double('fare_amt', 6, 2);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fares');
    }
}
