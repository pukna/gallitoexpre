<?php

namespace App\Http\Controllers;

use App\enteredThePort;
use Illuminate\Http\Request;

class EnteredThePortController extends Controller
{
    public function index()
    {
        return EnteredThePort::all();
    }
    public function show(EnteredThePort $EnteredThePort)
    {
        return $EnteredThePort;
    }
    public function store(Request $request)
    {
        $EnteredThePort = EnteredThePort::create($request->all());
        return response()->json($EnteredThePort, 201);
    }
    public function update(Request $request, EnteredThePort $EnteredThePort)
    {
        $EnteredThePort->update($request->all());
        return response()->json($EnteredThePort, 200);
    }
    public function delete(EnteredThePort $EnteredThePort)
    {
        $EnteredThePort->delete();
        return response()->json(null, 204);
    }
}
