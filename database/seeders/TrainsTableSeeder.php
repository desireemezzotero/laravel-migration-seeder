<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Models\Train;
 
class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
     for($i = 0; $i < 20; $i++){

        do {
            $code_train = $faker->unique()->randomNumber(4, false);
        } while (Train::where('code_train', $code_train)->exists());


        $newTrain->code_train = $faker->randomNumber(4,false);
        $newTrain->arrive_train = $faker->dateTime->format('Y-m-d H:i:s');
        $newTrain->departure_train = $faker->dateTime->format('Y-m-d H:i:s');
        $newTrain->arrive_station = $faker->city();
        $newTrain->departure_station= $faker->city();
        $newTrain->train_on_time= $faker->boolean();
        $newTrain->canceled_trein= $faker->boolean();
        $newTrain->number_carriages= $faker->randomDigit();
        $newTrain->agency= $faker->company();

        $newTrain->save();
     }
    }
}
