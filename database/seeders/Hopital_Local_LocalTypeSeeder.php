<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
class Hopital_Local_LocalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();

        //A revoir car possibilité qu'un hopital aie plus de 80 locaux
        for ($i=0; $i < 240 ; $i++) { 

            DB::table('hopital_local_local_type')->insert([
                [
                    'hopital_id'=>$faker->numberBetween($min = 1, $max = 3),
                    'local_id'=>$faker->numberBetween($min = 1, $max = 150),
                    'local_type_id'=>$faker->numberBetween($min = 1, $max = 8),
                ]
            ]);
        }
    }
}
