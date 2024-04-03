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
        Schema::create('transactions', function (Blueprint $table) {
            $table->id();
            $table->string('transaction_id')->unique();
            $table->foreignId('users_id')->constrained('users', 'id')->onDelete('cascade');
            $table->unsignedBigInteger('amount');
            $table->mediumText('company_address')->nullable();
            $table->mediumText('client_address')->nullable();
            $table->boolean('status')->default(0);
            $table->boolean('nature');
            $table->foreignId('plan_id')->nullable()->constrained('plans')->onDelete('cascade');
            $table->foreignId('account_id')->constrained('accounts')->onDelete('cascade');
            $table->boolean('reinvest')->default(false);
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
        Schema::dropIfExists('transactions');
    }
};
