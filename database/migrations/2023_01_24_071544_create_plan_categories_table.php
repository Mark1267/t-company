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
        Schema::create('plan_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('body');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();
        });

        Schema::table('plans', function(Blueprint $table){
            $table->unsignedBigInteger('cat_id');
        });

        //compound
        // Schema::create('compound_plan_categories', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('title');
        //     $table->text('body');
        //     $table->unsignedBigInteger('user_id');
        //     $table->timestamps();
        // });

        Schema::table('compound_plans', function(Blueprint $table){
            $table->unsignedBigInteger('cat_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('plan_categories');

        Schema::table('plans', function(Blueprint $table){
            $table->dropColumn('cat_id');
        });

        // //compound
        // Schema::dropIfExists('compound_plan_categories');

        Schema::table('compound_plans', function(Blueprint $table){
            $table->dropColumn('cat_id');
        });
    }
};
