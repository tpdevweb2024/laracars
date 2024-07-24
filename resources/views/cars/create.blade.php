@extends('layout.app')

@section('title', 'Ajouter une nouvelle voiture')

@section('content')
    <h1>Ajouter une nouvelle voiture</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cars.store') }}" method="post">
        @csrf
        <div>
            <label for="brand">Marque</label>
            <input type="text" name="brand" id="brand">
        </div>

        <div>
            <label for="model">Modele</label>
            <input type="text" name="model" id="model">
        </div>

        <div>
            <label for="kilometers">Kilometrage</label>
            <input type="number" name="kilometers" id="kilometers">
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" name="price" id="price">
        </div>

        <button type="submit">Ajouter</button>
    </form>
@endsection
