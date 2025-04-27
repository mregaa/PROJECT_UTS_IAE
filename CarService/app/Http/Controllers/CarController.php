<?php

namespace App\Http\Controllers;


use Illuminate\View\View;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    public function index()
    {
        return response()->json(Car::all());
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string',
            'brand' => 'required|string',
            'year' => 'required|integer',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
            'image' => 'required|string',
        ]);

        $car = Car::create($validated);
        return response()->json($car, 201);
    }

    public function show($id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }
        return response()->json($car);
    }

    public function update(Request $request, $id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        $validated = $request->validate([
            'name' => 'string',
            'brand' => 'string',
            'year' => 'integer',
            'price' => 'numeric',
            'stock' => 'integer',
            'image' => 'string',
        ]);

        $car->update($validated);
        return response()->json($car);
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        if (!$car) {
            return response()->json(['message' => 'Car not found'], 404);
        }

        $car->delete();
        return response()->json(['message' => 'Car deleted']);
    }
    public function indexView()
    {
        $cars = Car::all(); // Ambil semua data mobil dari database
        return view('cars.index', compact('cars'), ['cars' => $cars]);

    }
}
