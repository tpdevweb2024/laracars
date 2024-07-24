@extends('layout.app')

@section('title', 'Ma Route')

@section('content')
    <h1>Page Ma Route</h1>
    <p>Prénom : {{ $prenom }}</p>
    <p>Nom : {{ $nom }}</p>
@endsection
