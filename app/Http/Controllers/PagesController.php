<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function about()
    {
        return view('about');
    }

    public function maRoute()
    {
        $prenom = "John";
        $nom = "Doe";
        return view('maroute', compact('prenom', 'nom'));
    }

    public function contact()
    {
        return view('contact');
    }

    public function data()
    {
        $array = [
            'nom' => 'Doe',
            'prenom' => 'John',
            'age' => 25,
        ];
        return response()->json($array);
    }

    public function article($slug)
    {
        return $slug;
    }

    public function modele($marque, $modele)
    {
        return "$marque $modele";
    }
}
