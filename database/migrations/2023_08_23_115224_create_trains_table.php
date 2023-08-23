<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('trains', function (Blueprint $table) {
      $table->id();
      $table->string('agency');
      $table->string('start_station');
      $table->string('end_station');
      $table->time('time_to_arrival');
      $table->time('time_to_departure');
      $table->integer('train_code');
      $table->tinyInteger('n_train_carriage');
      $table->boolean('in_time');
      $table->boolean('deleted');
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('trains');
  }
};
