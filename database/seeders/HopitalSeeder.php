<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HopitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hopitals')->insert([
            [
                'nom'=>'Hopital Bruggeman',
                'adresse'=>'Rue Bruggeman 401 Laeken'
            ],
            [
                'nom'=>'Hopital Saint Pierre',
                'adresse'=>'Rue de la dentisterie 404 Saint josse'
            ],
            [
                'nom'=>'UZ',
                'adresse'=>"Avenue de l'exposition 1 Jette"
            ],
        ]);
    }
}
