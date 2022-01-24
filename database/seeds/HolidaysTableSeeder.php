<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Holiday;

class HolidaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 50; $i++) {
            // 1. Creo istanza
            $new_holiday = new Holiday();

            // 2. Column content with Faker
            $new_holiday->name = $faker->text(50);
            $new_holiday->destination = $faker->text(50);
            $new_holiday->price = rand(49, 9999);
            
            // 3. Save
            $new_holiday->save();
        } 

    }
}
