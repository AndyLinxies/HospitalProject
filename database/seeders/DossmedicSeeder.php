<?php

namespace Database\Seeders;

use App\Models\Dossmedic;
use App\Models\DossmedicStatu;
use App\Models\Patient;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DossmedicSeeder extends Seeder
{
    protected $counter=1;
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $querys=DB::select('SELECT * FROM `consultations` 
        LEFT JOIN `patients` ON `consultations`.`patient_id`=`patients`.`id`
        LEFT JOIN `maladie_patient` ON `patients`.`id` =`maladie_patient`.`patient_id`
        LEFT JOIN `maladies` ON `maladie_patient`.`maladie_id` =`maladies`.`id`
        LEFT JOIN `dossmedics` ON `consultations`.`id`=`dossmedics`.`consultation_id`
        WHERE `consultation_statu_id`=4
        ');

        

        //On cherche un statut au hasard dans la table des status de dossier medical
        $dossMedStatus=DossmedicStatu::inRandomOrder()->first();

        //A faire
        //Pas plus de 5 dossiers médicaux pour un client donné.


        foreach ($querys as $query) {

        // $patientDossMeds=DB::table('patients')
        // ->leftJoin('maladie_patient', 'patients.id', '=', 'maladie_patient.patient_id')
        // ->leftJoin('maladies', 'maladie_patient.maladie_id', '=', 'maladies.id')
        // ->leftJoin('consultations', 'patients.id', '=', 'consultations.patient_id')
        
        // ->leftJoin('docteurs', 'consultations.docteur_id', '=', 'docteurs.id')
    
        // ->leftJoin('dossmedics', 'consultations.id', '=', 'dossmedics.consultation_id')
        // ->leftJoin('dossmedic_status', 'dossmedics.dossmedic_statu_id', '=', 'dossmedic_status.id')
        // ->where('patients.id','=',$query->patient_id)
        // ->get();

            // dd($query);
            //Certains requettes du query sont nulles et cela pose problème. Pour éviter celà on met in if
            // $patient=Patient::find($query->patient_id);
            
            // $nbrDossmed=count($patientDossMeds);
            // dd($patientDossMeds);
            // dd(count($patientDossMeds));
            // $dossiers=Dossmedic::where('patient_id',$query->patient_id)->get();
            //$dossiers->count() < 5

            if ($query->id != null ) {
            DB::table('dossmedics')->insert([
                [
                    'consultation_id' =>$query->id,
                    //si cest curable on choisis un status au hasard sinon on met que c'est incurable
                    'dossmedic_statu_id' => $query->curable == 1 ? $dossMedStatus->id : 1
                ]
            ]);
        }
        }
    }
}
