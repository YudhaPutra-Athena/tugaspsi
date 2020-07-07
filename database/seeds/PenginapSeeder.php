<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PenginapSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for($i = 1; $i <= 5; $i++){

        // insert data ke table pegawai
            DB::table('penginap')->insert([
        	    'nama' => $faker->name,
        	    'umur' => $faker->numberBetween(20,60),
        	    'tanggal' => $faker->date('2020-07-01')
             ]);
        }
    }
}
