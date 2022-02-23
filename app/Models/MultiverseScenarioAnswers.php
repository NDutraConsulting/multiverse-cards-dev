<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MultiverseScenarioAnswers extends Model
{
    use HasFactory;

    /****
    *
      $table->id();
      $table->bigInteger('user_id');
      $table->bigInteger('multiverse_scenario_id');
      $table->json('answers');
      $table->bigInteger('internal_status_id')->nullable();
      $table->timestamp('last_used_at')->nullable();
      $table->timestamps();
    ***/
}
