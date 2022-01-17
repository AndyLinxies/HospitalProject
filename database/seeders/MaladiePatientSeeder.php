<?php

namespace Database\Seeders;

use App\Models\Maladie;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaladiePatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        

        //Tous les patients
        $allPatients=Patient::all();

        for ($i=0; $i <count($allPatients)  ; $i++) {
        //Une maladie et un patient au hasard chacun dans leur table
        $maladie=Maladie::inRandomOrder()->first();
        $patient=Patient::inRandomOrder()->first();
            
            DB::table('maladie_patient')->insert([
                [
                    'maladie_id' =>$maladie->id,
                    'patient_id' =>$patient->id
                ],
            ]);
        }
        

    }
}
