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
        Schema::create('multiverse_scenarios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('content');
            $table->bigInteger('answer_count');
            $table->bigInteger('internal_status_id');
            $table->enum('content_rating_id', ['family', 'teen', 'nc-17', 'nsfw', 'x'])->nullable();
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
        Schema::dropIfExists('multiverse_scenarios');
    }
};
