@extends('layouts.index')
@section('content')
<h1 class="text-2xl text-center mt-10">Informations sur le dossier médical du patient <span class="text-red-500">
    {{$patientDossMeds[0]->nomPatient}} {{$patientDossMeds[0]->prenom}}
</span> </h1>
{{-- {{dd(url()->current())}} --}}
@foreach ($patientDossMeds as $patientDossMed)
    

<div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mb-5 mt-5">

<p>Nom du Docteur: <span class="text-green-500"> {{$patientDossMed->nomDoc}}
</span></p> <hr>
<p>Maladie: <span class="text-green-500">{{$patientDossMed->nomMaladie}}
</span></p> <hr>
<p>Type de la maladie: <span class="text-green-500">{{$patientDossMed->curable == 1 ? "Curable" : "Non curable"}}
</span></p><hr>
<p>Traitement: <span class="text-green-500">{{$patientDossMed->traitement}}
</span></p><hr>
<p>Date et heure de consultation: <span class="text-green-500">{{$patientDossMed->consultDate}} à {{$patientDossMed->consultTime}}
</span></p><hr>
</div>
@endforeach
@endsection