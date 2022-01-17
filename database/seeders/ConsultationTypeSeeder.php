<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ConsultationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('consultation_status')->insert([
            [
                "nameConStat"=>"Planifié"
            ],
            [
                "nameConStat"=>"Annulé"
            ],
            [
                "nameConStat"=>"Raté"
            ],
            [
                "nameConStat"=>"Fait"
            ],
        ]);
    }
}
