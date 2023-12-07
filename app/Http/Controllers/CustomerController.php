<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index() {
        $customers =  Customer::all();
        return view('customers.index', ['customers' => $customers]);
    }

    public function create() {
        return view('customers.create');

    }
    public function store(Request $request) {
        $data = $request->validate([
            'customer_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required'
        ]);

        $newCustomer = Customer::create($data);

        return redirect(route('order.order'));
    }

    public function edit(Customer $customer) {
        return view('customers.edit', ['customer'=> $customer]);
    }

    public function update(Customer $customer, Request $request) {
        $data = $request->validate([
            'customer_name' => 'required',
            'address' => 'required',
            'email' => 'required',
            'telephone' => 'required'
        ]);

        $customer->update($data);

        return redirect(route('customer.index'));
    }

    public function destroy(Customer $customer) {
        $customer->delete();
        return redirect(route('customer.index'));
    }
}
