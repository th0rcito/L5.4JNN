<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class PizzasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach (range(1,10) as $index) {
        DB::table('pizzas')->insert([
            'user_id' =>1,
            'name' =>$faker->name,
            'description'=>$faker->text($maxNbChars = 180),
            'price'=>$faker->randomFloat($nbDigits = 3,$nbMaxDecimals = 2, $min = 0, $max = NULL),
            'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
      }

    }
}
