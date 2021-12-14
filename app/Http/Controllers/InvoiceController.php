<?php

namespace App\Http\Controllers;

use App\invoice;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        return Invoice::all();
    }
    public function show(Invoice $invoice)
    {
        return $invoice;
    }
    public function store(Request $request)
    {
        $invoice = Invoice::create($request->all());
        return response()->json($invoice, 201);
    }
    public function update(Request $request, Invoice $invoice)
    {
        $invoice->update($request->all());
        return response()->json($invoice, 200);
    }
    public function delete(Invoice $invoice)
    {
        $invoice->delete();
        return response()->json(null, 204);
    }
}
