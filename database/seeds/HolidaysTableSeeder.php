<?php

require_once 'vendor/autoload.php';

use Illuminate\Database\Seeder;
use App\Holiday;
use Faker\Generator as Faker;


class HolidaysTableSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {   
        for ($i=0; $i < 50; $i++) { 
            $new_holiday = new Holiday();
            $new_holiday->reference = $faker->bothify('??-########');
            $new_holiday->type = $this->holidayType();
            $new_holiday->name = $faker->words(5, true);
            $new_holiday->departure = $faker->date();
            $new_holiday->days = $faker->numberBetween(2, 21);
            $new_holiday->description = $faker->paragraph();
            $new_holiday->price = $faker->numberBetween(200, 50000);
            $new_holiday->booking_fee = $faker->numberBetween(1, 100);
            $new_holiday->included = $faker->paragraph();
            $new_holiday->not_included = $faker->paragraph();
            $new_holiday->save();
        }
    }

    private function holidayType()
    {
        $arr = ['Bus Trip', 'Luxury', 'Low Cost', 'Adventure', 'Relax'];
        shuffle($arr);
        return $arr[0];
    }
}