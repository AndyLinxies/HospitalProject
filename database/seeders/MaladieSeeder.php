<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MaladieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('maladies')->insert([
            [
                'nomMaladie'=>'Alzheimer',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Asthme',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Cancer Colorectal',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Cancer de la prostate',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Cancer de la peau',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>"Cancer du col de l'uterus",
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Hernie Discale',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Herpes genital',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Hyperventilation',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Incontinence urinaire',
                'curable'=>false,
                'traitement'=>null

            ],
            [
                'nomMaladie'=>'Acouphène',
                'curable'=>true,
                'traitement'=>'Spray auditif'
            ],
            [
                'nomMaladie'=>'Ampoule ou cloque',
                'curable'=>true,
                'traitement'=>'crème'
            ],
            [
                'nomMaladie'=>'Anxiété',
                'curable'=>true,
                'traitement'=>'repos'
            ],
            [
                'nomMaladie'=>'Angine',
                'curable'=>true,
                'traitement'=>'pastille de menthe'
            ],
            [
                'nomMaladie'=>'Apnée du sommeil',
                'curable'=>true,
                'traitement'=>'oxygène par voie respiratoire'
            ],
            [
                'nomMaladie'=>'Burn-out',
                'curable'=>true,
                'traitement'=>'repos'

            ],
            [
                'nomMaladie'=>'Appendicite',
                'curable'=>true,
                'traitement'=>'operation'
            ],
            [
                'nomMaladie'=>'Fracture',
                'curable'=>true,
                'traitement'=>'platre'

            ],
            [
                'nomMaladie'=>'Depression',
                'curable'=>true,
                'traitement'=>'Anti depresseur'
            ],
            [
                'nomMaladie'=>'Brulure',
                'curable'=>true,
                'traitement'=>'Creme anti brulure'
            ],
            [
                'nomMaladie'=>'Calcul Biliaire',
                'curable'=>true,
                'traitement'=>'Operation'

            ],
            [
                'nomMaladie'=>'Cauchemars',
                'curable'=>true,
                'traitement'=>'thérapie cognitivo-comportementale.'

            ],
            [
                'nomMaladie'=>'Chlamydia',
                'curable'=>true,
                'traitement'=>'Anti biotique'

            ],
            [
                'nomMaladie'=>'Anemie',
                'curable'=>true,
                'traitement'=>'Prise de Fer'

            ],
            [
                'nomMaladie'=>'Constipation',
                'curable'=>true,
                'traitement'=>'Laxatif'

            ],
            [
                'nomMaladie'=>'Cataracte',
                'curable'=>true,
                'traitement'=>'intervention chirurgicale'
            ],
            [
                'nomMaladie'=>'Eczema',
                'curable'=>true,
                'traitement'=>'crème hydratante'
            ],
            [
                'nomMaladie'=>'Fievre',
                'curable'=>true,
                'traitement'=>'medicament anti inflamatoire'

            ],
            [
                'nomMaladie'=>'Insomnie',
                'curable'=>true,
                'traitement'=>'Somnifère'
            ],
            [
                'nomMaladie'=>'Rhume',
                'curable'=>true,
                'traitement'=>'gouttes nasales décongestionnantes '

            ],
        ]);
    }
}
