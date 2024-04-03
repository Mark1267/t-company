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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('facebook')->default('https://facebook.com/#');
            $table->string('linkdin')->default('https://linkdin.com/#');
            $table->string('twitter')->default('https://twitter.com/#');
            $table->string('instagram')->default('https://instagram.com/#');
            $table->string('google')->default('https://google.com/#');
            $table->string('rank')->default('Employee');
            $table->string('image')->default(config('settings.site.logo.full'));
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
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
        Schema::dropIfExists('teams');
    }
};
