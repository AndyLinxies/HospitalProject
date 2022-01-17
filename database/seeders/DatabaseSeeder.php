<?php

namespace Database\Seeders;

use App\Models\Consultation;
use App\Models\Docteur;
use App\Models\Local;
use App\Models\Patient;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([HopitalSeeder::class]);
        $this->call([LocalTypeSeeder::class]);
        $this->call([MaladieSeeder::class]);
        
        
        Docteur::factory()->count(50)->create();

        
        
        $this->call([ConsultationTypeSeeder::class]);
        
        Patient::factory()->count(200)->create();
        $this->call([MaladiePatientSeeder::class]);

        
        Local::factory()->count(150)->create();
        
        $this->call([Hopital_Local_LocalTypeSeeder::class]);
        
        $this->call([DossMedicStatusSeeder::class]);
        
        
        Consultation::factory()->count(2000)->create();
        $this->call([DossmedicSeeder::class]);
    }
}
