<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePurchasedTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchased_tokens',function (Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('purchased_by')->nullable();
            $table->unsignedBigInteger('token_id');
            $table->string('gifted_to')->nullable();
            $table->boolean('active')->default(false);
            $table->foreign('token_id')->references('id')->on('tokens')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('purchased_by')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
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
        Schema::dropIfExists('purchased_tokens');
    }
}
