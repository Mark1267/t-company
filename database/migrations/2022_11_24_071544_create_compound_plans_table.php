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
        Schema::create('compound_plans', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->string('name')->unique();
            $table->mediumText('title')->nullable();
            $table->unsignedBigInteger('min');
            $table->unsignedBigInteger('max');
            $table->mediumText('rate');
            $table->unsignedBigInteger('interval');
            $table->unsignedBigInteger('time');
            $table->unsignedBigInteger('plan_time_id');
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
        Schema::dropIfExists('compound_plans');
    }
};
