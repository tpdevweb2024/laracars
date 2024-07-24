@extends('layout.app')

@section('title', 'Toutes les voitures')

@section('content')
    <h1>Toutes les voitures</h1>
    @foreach ($cars as $car)
        <div>
            <p>---</p>
            <p>Marque : {{ $car->brand }}</p>
            <p>Modele : {{ $car->model }}</p>
            <p>Kilometrage : {{ $car->kilometers }}</p>
            <p>Créée le : {{ $car->created_at->format('d/m/Y H:i:s') }}</p>
        </div>
    @endforeach

@endsection
