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
        Schema::create('compound_investments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->constrained('users')->onDelete('cascade');
            $table->unsignedBigInteger('main_user');
            $table->timestamp('start')->nullable();
            $table->timestamp('next_interval')->nullable();
            $table->timestamp('end')->nullable();
            $table->unsignedBigInteger('transactions_id');
            $table->timestamp('pause_date')->useCurrent();
            $table->boolean('paused')->default(false);
            $table->boolean('status')->default(0);
            $table->boolean('continue')->default(true);
            $table->boolean('reinvest')->default(false);
            $table->string('extension_id')->nullable();
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
        Schema::dropIfExists('compound_investments');
    }
};
