<?php

use App\Models\Hopital;
use App\Models\Patient;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Tous les hopitaux
Route::get('/', function () {
    $hopitaux=Hopital::all();
    return view('partials.Hopitaux',compact('hopitaux'));
});

Route::get('/hopital/{id}', function ($id) {
    //le $id de la fonction represente le id de l'hopital surlequel on clique
    $hopitalConsults=DB::table('hopitals')
    ->leftJoin('hopital_local_local_type', 'hopitals.id', '=', 'hopital_local_local_type.hopital_id')
    ->leftJoin('locals', 'hopital_local_local_type.local_id', '=', 'locals.id')
    ->leftJoin('consultations', 'locals.id', '=', 'consultations.local_id')
    ->leftJoin('consultation_status', 'consultations.consultation_statu_id', '=', 'consultation_status.id')
    ->leftJoin('patients', 'consultations.patient_id', '=', 'patients.id')
    ->leftJoin('maladie_patient', 'patients.id', '=', 'maladie_patient.patient_id')
    ->leftJoin('maladies', 'maladie_patient.maladie_id', '=', 'maladies.id')

    ->leftJoin('docteurs', 'consultations.docteur_id', '=', 'docteurs.id')
    ->where('hopitals.id','=',$id)
    // ->orderBy('id','ASC')
    //simplePaginate au lieu de get() . Dans la blade il faut lavariabledelaboucle->links()
    ->simplePaginate(20);

    // dd($hopitalConsults->first());
    return view('pages.ConsultationHopital',compact('hopitalConsults'));
});

//Tous les patients
Route::get('/patients', function () {
    $patients=Patient::simplePaginate(30);
    return view('pages.Patients',compact('patients'));
});

//Dossier médical du patient sélectionné
// /patient/{{$patient->id}}/dossMedic
Route::get('/patient/{id}/dossMedic', function ($id) {
    $patientDossMeds=DB::table('patients')
    ->leftJoin('maladie_patient', 'patients.id', '=', 'maladie_patient.patient_id')
    ->leftJoin('maladies', 'maladie_patient.maladie_id', '=', 'maladies.id')
    ->leftJoin('consultations', 'patients.id', '=', 'consultations.patient_id')
    
    ->leftJoin('docteurs', 'consultations.docteur_id', '=', 'docteurs.id')

    ->leftJoin('dossmedics', 'consultations.id', '=', 'dossmedics.consultation_id')
    ->leftJoin('dossmedic_status', 'dossmedics.dossmedic_statu_id', '=', 'dossmedic_status.id')
    ->where('patients.id','=',$id)
    // ->simplePaginate(5);
    ->get();

    // dd($patientDossMeds->first());
    return view('pages.DossMedicPatient',compact('patientDossMeds'));
});