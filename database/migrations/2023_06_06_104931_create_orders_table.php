<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->unsignedInteger('user_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedInteger('status_id')->default(1);
            $table->foreign('status_id')->references('id')->on('statuses')->onDelete('cascade');
            $table->string('country');
            $table->string('subject');
            $table->string('paper_type');
            $table->string('paper_topic');
            $table->string('academic_level');
            $table->string('number_of_pages');
            $table->string('reference_style');
            $table->integer('style');
            $table->string('deadline');
            $table->unsignedInteger('deadline_id')->nullable();
            $table->foreign('deadline_id')->references('id')->on('deadlines')->onDelete('cascade');
            $table->mediumText('detail')->nullable();
            // $table->boolean('is_complete')->default(false);
            // $table->boolean('spacing')->default(false);
            $table->integer('cost_per_page');
            $table->integer('total_price');

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
        Schema::dropIfExists('orders');
    }
}
