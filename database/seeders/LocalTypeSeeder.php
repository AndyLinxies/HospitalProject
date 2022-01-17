<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LocalTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('local_types')->insert([
            [
                'nom'=>'Local Urgence',
                
            ],
            [
                'nom'=>'Local Gastro',
                
            ],
            [
                'nom'=>'Local Dentisterie',
                
            ],
            [
                'nom'=>'Local Hématologie',
                
            ],
            [
                'nom'=>'Local Podologie',
                
            ],
            [
                'nom'=>'Local Cardiologie',
                
            ],
            [
                'nom'=>'Local Pneumologie',
                
            ],
            [
                'nom'=>'Local Neurologie',
                
            ],
        ]);
    }
}
