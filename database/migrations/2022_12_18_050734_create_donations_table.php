<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('money_id');
            $table->char('donation_id',8)->unique();
            $table->boolean('status')->default(true);
            $table->float('amount',36);
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('money_id')->references('id')->on('payments')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('donations_sent', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('donation_id');
            $table->unsignedBigInteger('to_user');
            $table->string('status')->default('Not Submitted');
            $table->foreign('donation_id')->references('id')->on('donations')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('to_user')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });

        Schema::create('donations_received', function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('donation_id');
            $table->string('status')->default('Not Submitted');
            $table->unsignedBigInteger('from');
            $table->foreign('from')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('donation_id')->references('id')->on('donations')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('donations');
        Schema::dropIfExists('donations_sent');
        Schema::dropIfExists('donation_received');
    }
}
