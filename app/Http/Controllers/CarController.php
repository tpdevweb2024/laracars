<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Retourne tous les véhicules dans une vue index
     */
    public function index()
    {
        // RECUPERER TOUS LES VEHICULES SOUS LA FORME D'UNE COLLECTION
        $cars = Car::paginate(1);
        dd($cars);
        // On passe les données des véhicules à la vue index
        return view('cars/index', [
            'cars' => $cars,
        ]);
    }
}
