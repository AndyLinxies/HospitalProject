@extends('layouts.index')
@section('content')
<h1 class="text-2xl text-center mt-10">Les Consultations de l'{{$hopitalConsults[0]->nom}} </h1>
<div class="ml-3 mr-3">

{{-- {{dd($hopitalConsults[0])}} --}}
<div>{{ $hopitalConsults->links() }}</div>

<table class="table-auto w-100 text-center">
    <thead>
        <tr class='bg-purple-600 bg-opacity-100'>
            <th>#</th>
            <th class='w-1/4'>Date</th>
            <th class='w-1/4'>Nom Docteur</th>
            <th class='w-1/4'>Local</th>
            <th class='w-1/4'>Nom Patient</th>
            <th class='w-1/2'>Statut Consultation</th>
            <th class='w-1/4 h-1/2'>Maladie</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($hopitalConsults as $hopitalConsult)
            <tr class='bg-purple-600 bg-opacity-50 h-14 '>
                
                <td>{{ $hopitalConsult->id}}</td>
                <td>{{ $hopitalConsult->consultDate }}</td>
                <td>{{ $hopitalConsult->nomDoc }}</td>
                <td>{{ $hopitalConsult->nomLocal }}</td>
                <td>{{ $hopitalConsult->nomPatient }}</td>
                <td>{{ $hopitalConsult->nameConStat }}</td>
                <td class='ml-5 '>{{$hopitalConsult->consultation_statu_id == 4 ?$hopitalConsult->nomMaladie : 'En attente de diagnostique' }}</td>
                
            </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection