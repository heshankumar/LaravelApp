<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function index() {
        $suppliers =  Supplier::all();
        return view('suppliers.index', ['suppliers' => $suppliers]);
    }

    public function create() {
        return view('suppliers.create');

    }
    public function store(Request $request) {
        $data = $request->validate([
            'supplier_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'contact_person' => 'required'
        ]);

        $newProduct = Supplier::create($data);

        return redirect(route('supplier.index'));
    }

    public function edit(Supplier $supplier) {
        return view('suppliers.edit', ['supplier'=> $supplier]);
    }

    public function update(Supplier $supplier, Request $request) {
        $data = $request->validate([
            'supplier_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'contact_person' => 'required'
        ]);

        $supplier->update($data);

        return redirect(route('supplier.index'));
    }

    public function destroy(Supplier $supplier) {
        $supplier->delete();
        return redirect(route('supplier.index'));
    }
}
