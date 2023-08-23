<?php


namespace Database\Seeders;

use App\Models\Train;
use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrainSeeder extends Seeder
{
  /**
   * Run the database seeds.
   */
  public function run(Faker $faker): void
  {
    for ($i = 0; $i < 50; $i++) {
      $newTrain = new Train();
      $newTrain->agency = $faker->company();
      $newTrain->start_station = $faker->city();
      $newTrain->end_station = $faker->city();
      $newTrain->time_to_arrival = $faker->time();
      $newTrain->time_to_departure = $faker->time();
      $newTrain->train_code = $faker->randomNumber(5, false);
      $newTrain->n_train_carriage = $faker->randomDigitNotNull();
      $newTrain->in_time = $faker->boolean();
      $newTrain->deleted = $faker->boolean();

      $newTrain->save();
    }
  }
}
