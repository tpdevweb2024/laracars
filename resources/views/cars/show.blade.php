@extends('layout.app')

@section('title', $car->brand . ' ' . $car->model)

@section('content')
    <div>
        <p>---</p>
        <p>Marque : {{ $car->brand }}</p>
        <p>Modele : {{ $car->model }}</p>
        <p>Kilometrage : {{ $car->kilometers }}</p>
        <p>Créée le : {{ $car->created_at->format('d/m/Y H:i:s') }}</p>
    </div>
@endsection
