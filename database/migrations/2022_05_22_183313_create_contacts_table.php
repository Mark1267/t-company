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
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('users_id')->nullable()->constrained('users')->onDelete('cascade')->default(0);
            $table->string('ref')->unique();
            $table->mediumText('full_name');
            $table->mediumText('phone');
            $table->string('email');
            $table->boolean('read')->default(0);
            $table->text('message');
            $table->mediumText('subject');
            $table->timestamps();
        });

        Schema::create('replys', function (Blueprint $table) {
            $table->id();
            $table->foreignId('reply_users_id')->constrained('users')->onDelete('cascade');
            $table->foreignId('contacts_id')->constrained('contacts')->onDelete('cascade');
            $table->boolean('read')->default(0);
            $table->text('message');
            $table->mediumText('subject');
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
        Schema::dropIfExists('contacts');
        Schema::dropIfExists('replys');
    }
};
