<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('roles')->insert([
        [
          'name'=>'admin',
          'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ],
        [
          'name'=>'registered',
          'created_at'=>\Carbon\Carbon::now()->format('Y-m-d H:i:s')
        ]
      ]);
    }
}
