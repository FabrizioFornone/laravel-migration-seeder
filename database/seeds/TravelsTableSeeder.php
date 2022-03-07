<?php

use Faker\Generator as Faker;

use Illuminate\Database\Seeder;

use App\Travel;


class TravelsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 10; $i++) {
            $travel = new Travel();

            $travel->dealers = $faker->company();
            $travel->location = $faker->city();
            $travel->departure = $faker->date();
            $travel->arrival = $faker->date();
            $travel->overall = $faker->numberBetween(400, 8000);
            $travel->travel_description = $faker->text('200');
            $travel->pets_allowed = $faker->boolean();
            $travel->available = $faker->boolean();

            $travel->save();
        }
    }
}
