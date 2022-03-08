<?php

use Illuminate\Database\Seeder;

use Faker\Generator as Faker;
use App\Agency;

class AgencyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 20; $i++){
            $newTravel = new Agency();
            $newTravel->luogo = $faker->word();
            $newTravel->data = $faker->date();
            $newTravel->costo = $faker->numberBetween(200-500);

            $newTravel->save();
        }
    }
}
