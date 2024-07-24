@extends('layout.app')

@section('title', 'Modifier voiture')

@section('content')
    <h1>Modifier voiture</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('cars.update', ['id' => $car->id]) }}" method="post">
        @csrf
        @method('patch')
        <div>
            <label for="brand">Marque</label>
            <input type="text" name="brand" id="brand" value="{{ $car->brand }}">
        </div>

        <div>
            <label for="model">Modele</label>
            <input type="text" name="model" id="model" value="{{ $car->model }}">
        </div>

        <div>
            <label for="kilometers">Kilometrage</label>
            <input type="number" name="kilometers" id="kilometers" value="{{ $car->kilometers }}">
        </div>

        <div>
            <label for="price">Prix</label>
            <input type="number" name="price" id="price" value="{{ $car->price }}">
        </div>

        <button type="submit">Modifier</button>
    </form>
@endsection
