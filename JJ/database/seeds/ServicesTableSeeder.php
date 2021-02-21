<?php

use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
          'services' => 'A',
          'price' => '10'
        ]);

        DB::table('services')->insert([
          'services' => 'B',
          'price' => '10'
        ]);


        DB::table('services')->insert([
          'services' => 'C',
          'price' => '10'
        ]);


        DB::table('services')->insert([
          'services' => 'C',
          'price' => '10'
        ]);
    }
}
