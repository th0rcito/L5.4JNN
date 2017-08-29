<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

use Faker\Factory as Faker;

class IngredientsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
      foreach (range(1,20) as $index) {
        DB::table('ingredients')->insert([
            'name' =>$faker->name,
            'price' =>$faker->randomFloat($nbDigits = 5,$nbMaxDecimals = 2, $min = 0, $max = NULL),
            'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]);
      }
    }
}
