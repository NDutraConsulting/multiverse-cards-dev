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
        Schema::create('multiverse_scenario_answers', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('user_id');
          $table->bigInteger('multiverse_scenario_id');
          $table->json('answers');
          $table->bigInteger('internal_status_id')->nullable();
          $table->timestamp('last_used_at')->nullable();
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
        Schema::dropIfExists('multiverse_scenario_answers');
    }
};
