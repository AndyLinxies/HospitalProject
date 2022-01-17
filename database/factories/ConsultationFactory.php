<?php

namespace Database\Factories;

use App\Models\ConsultationStatu;
use App\Models\Docteur;
use App\Models\Local;
use App\Models\Patient;
use Illuminate\Database\Eloquent\Factories\Factory;
use Carbon\Carbon;

class ConsultationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $startDate = Carbon::createFromFormat('Y/m/d', '2021/06/01');
        $endDate = Carbon::createFromFormat('Y/m/d', '2022/01/31');
        $startTime = Carbon::createFromFormat('H:i:s', '8:00:00');
        $endTime = Carbon::createFromFormat('H:i:s', '19:00:00');

       

            $randomDate= $this->faker->dateTimeBetween($startDate, $endDate);
            $randomTime= $this->faker->dateTimeBetween($startTime,  $endTime);
    
            $patient= Patient::inRandomOrder()->first();
            $docteur= Docteur::inRandomOrder()->first();
            // $consultType= ConsultationStatu::inRandomOrder()->first();
            $local= Local::inRandomOrder()->first();

        
            if($randomDate > Carbon::now()){
                $statut_array=[1,2,4];
                $statut=  array_rand($statut_array);
                $statut_id= $statut_array[$statut];
            }else{
                $statut_array=[2,3,4,4,4];
                $statut=  array_rand($statut_array);
                $statut_id= $statut_array[$statut];
            }

        return [
            'patient_id' => $patient->id,
            'docteur_id' => $docteur->id,
            //Le format ici sert à garder seulement le jour ou seulement l'heure
            'consultDate' => Carbon::parse($randomDate)->format('d/m/Y'),
            'consultTime' =>Carbon::parse($randomTime)->format('H:i:s'),
            // 'consultation_statu_id' => $consultType->id,
            'consultation_statu_id' => $statut_id,
            'local_id' => $local->id
        ];
    }
}
