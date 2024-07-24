<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Illuminate\Http\Request;
use App\Http\Requests\CarRequest;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // RECUPERER TOUS LES VEHICULES SOUS LA FORME D'UNE COLLECTION
        $cars = Car::all();
        // On passe les données des véhicules à la vue index
        return view('cars/index', [
            'cars' => $cars,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('cars/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CarRequest $request)
    {
        // Recevoir le formulaire et l'enregistrer dans la BDD
        $car = new Car();
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->kilometers = $request->kilometers;
        $car->is_new = $request->kilometers == 0 ? true : false;
        $car->price = $request->price;
        $car->save(); // INSERT INTO cars ...
        return redirect()->route('cars.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(mixed $id)
    {
        $car = Car::find($id);
        return view('cars/show', [
            'car' => $car
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $car = Car::find($id);
        return view('cars/edit', [
            'car' => $car
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CarRequest $request, string $id)
    {
        $car = Car::find($id);
        $car->brand = $request->brand;
        $car->model = $request->model;
        $car->kilometers = $request->kilometers;
        $car->is_new = $request->kilometers == 0 ? true : false;
        $car->price = $request->price;
        $car->save(); // UPDATE cars ...
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        if ($request->model === $request->hidden) {
            $car = Car::find($id);
            $car->delete();

            return redirect()->route('cars.index');
        }

        return redirect()->route('cars.edit', $id);
    }
}
