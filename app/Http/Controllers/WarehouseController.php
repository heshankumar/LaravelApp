<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warehouse;

class WarehouseController extends Controller
{
    public function index() {
        $warehouses =  Warehouse::all();
        return view('warehouses.index', ['warehouses' => $warehouses]);
    }

    public function create() {
        return view('warehouses.create');

    }
    public function store(Request $request) {
        $data = $request->validate([
            'address' => 'required',
            'telephone' => 'required'
        ]);

        $newProduct = Warehouse::create($data);

        return redirect(route('warehouse.index'));
    }

    public function edit(Warehouse $warehouse) {
        return view('warehouses.edit', ['warehouse'=> $warehouse]);
    }

    public function update(Warehouse $warehouse, Request $request) {
        $data = $request->validate([
            'address' => 'required',
            'telephone' => 'required'
        ]);

        $warehouse->update($data);

        return redirect(route('warehouse.index'));
    }

    public function destroy(Warehouse $warehouse) {
        $warehouse->delete();
        return redirect(route('warehouse.index'));
    }
}
