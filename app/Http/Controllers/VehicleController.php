<?php

namespace App\Http\Controllers;

use App\vehicle;
use Illuminate\Http\Request;

class VehicleController extends Controller
{
    public function index()
    {
        return Vehicle::all();
    }
    public function show(Vehicle $vehicles)
    {
        return $vehicles;
    }
    public function store(Request $request)
    {
        $vehicles = Vehicle::create($request->all());
        return response()->json($vehicles, 201);
    }
    public function update(Request $request, Vehicle $vehicles)
    {
        $vehicles->update($request->all());
        return response()->json($vehicles, 200);
    }
    public function delete(Vehicle $vehicles)
    {
        $vehicles->delete();
        return response()->json(null, 204);
    }
}
