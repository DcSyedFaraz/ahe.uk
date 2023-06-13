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
            $table->integer('academic_level_id')->unsigned();
            $table->integer('deadline_id')->unsigned();
            $table->double('per_page_price',6,2);
            $table->foreign('academic_level_id')->references('id')->on('academic_levels')->onDelete('cascade');
            $table->foreign('deadline_id')->references('id')->on('deadlines')->onDelete('cascade');
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
