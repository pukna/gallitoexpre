<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\drive;

class DriverController extends Controller
{
    public function index()
    {
        return drive::all();
    }
    public function show(drive $driver)
    {
        return $driver;
    }
    public function store(Request $request)
    {
        $driver = drive::create($request->all());
        return response()->json($driver, 201);
    }
    public function update(Request $request, drive $driver)
    {
        $driver->update($request->all());
        return response()->json($driver, 200);
    }
    public function delete(drive $driver)
    {
        $driver->delete();
        return response()->json(null, 204);
    }
}
