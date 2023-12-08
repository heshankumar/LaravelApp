<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Customer;
use App\Models\Order;

class OrderController extends Controller
{
    public function index() {
        return view('orders.index');
    }

    public function details() {
        return view('orders.order');
    }

    public function show($id)
    {
        $order = Order::with('orderItems')->find($id);

        // Calculate the total cost of the order by summing up the total_cost of all order items
        $totalCost = $order->orderItems->sum('total_cost');

        return view('orders.show', compact('order', 'totalCost'));
    }
}
