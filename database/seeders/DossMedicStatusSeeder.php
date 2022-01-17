<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossMedicStatusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dossmedic_status')->insert([
            [
                "status"=>"incurable"
            ],
            [
                "status"=>"diagnostiqué"
            ],
            [
                "status"=>"en cours de traitement"
            ],
            [
                "status"=>"guéri"
            ],
        ]);
    }
}
