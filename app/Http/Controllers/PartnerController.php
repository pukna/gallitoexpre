<?php

namespace App\Http\Controllers;

use App\Partner;
use Illuminate\Http\Request;

class PartnerController extends Controller
{  
    public function index()
    {
        return Partner::all();
    }
    public function show(Partner $partner)
    {
        return $partner;
    }
    public function store(Request $request)
    {
        $partner = Partner::create($request->all());
        return response()->json($partner, 201);
    }
    public function update(Request $request, Partner $partner)
    {
        $partner->update($request->all());
        return response()->json($partner, 200);
    }
    public function delete(Partner $partner)
    {
        $partner->delete();
        return response()->json(null, 204);
    }
}
