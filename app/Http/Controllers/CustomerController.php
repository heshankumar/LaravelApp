<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Order;
use App\Models\Product;

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

        $newCustomer = new Customer;
        $newCustomer->customer_name = $request->customer_name;
        $newCustomer->address = $request->address;
        $newCustomer->email = $request->email;
        $newCustomer->telephone = $request->telephone;
        
        $newCustomer->save();

        $newOrder = new Order;
        $newOrder->customer_id = $newCustomer->id;
        
        $newOrder->save();

        $orderId = $newOrder->id;

        $products = Product::all();

        return view('orders.order', compact('orderId', 'products')); 
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
