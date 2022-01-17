@extends('layouts.index')
@section('content')
    <h1 class="text-2xl text-center mt-10">Les Hopitaux</h1>

    @foreach ($hopitaux as $hopital)

    <div class="w-full max-w-sm px-4 py-3 mx-auto bg-white rounded-md shadow-md dark:bg-gray-800 mb-5 mt-5">
        <div>
            <p class="text-xl text-red-500">{{$hopital->nom}}</p>
            <p>{{$hopital->adresse}}</p>
            <a class="text-blue-500 text-sm" href="/hopital/{{$hopital->id}}">Voir les consultations...</a>
        </div>
    </div>
    @endforeach
@endsection
