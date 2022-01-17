@extends('layouts.index')
@section('content')
<h1 class="text-2xl text-center mt-10">Tous les patients </h1>
<div class="ml-3 mr-3">


<div>{{ $patients->links() }}</div>

<table class="table-auto w-100 text-center">
    <thead>
        <tr class='bg-green-600 bg-opacity-100'>
            <th>#</th>
            <th>Nom du Patient</th>
            <th >Prénom</th>
            <th class='w-1/4'>Naissance</th>
            <th >Nr de Régistre</th>
            <th >Genre</th>
            <th>Personne de Contact</th>
            <th class='w-1/4'>Tel de la personne de Contact</th>
            <th class='h-1/2'>Ville</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($patients as $patient)
            <tr class='bg-green-600 bg-opacity-50 h-14 '>
                
                <td>{{ $patient->id}}</td>
                <td>{{ $patient->nomPatient }}</td>
                <td>{{ $patient->prenom }}</td>
                <td>{{ $patient->naissance }}</td>
                <td>{{ $patient->registreNr }}</td>
                <td>{{ $patient->genre }}</td>
                <td>{{ $patient->contactPers }}</td>
                <td>{{ $patient->contactPersPhone }}</td>
                <td >{{ $patient->ville }}</td>
                <td><a href="/patient/{{$patient->id}}/dossMedic">Dossier médical</a></td>                
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection