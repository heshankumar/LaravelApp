<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class OrderItemController extends Controller
{
    //
    public function store(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'product_id' => 'required|exists:products,id',
            'quantity' => 'required|numeric|min:1',
            // You can remove 'unit_price' from validation since it's fetched from the product
        ]);

        // Fetch the product to get the unit price
        $product = Product::find($request->input('product_id'));

        $orderItem = new OrderItem([
            'order_id' => $request->input('order_id'),
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'unit_price' => $product->unit_price,
        ]);

        // Calculate total_cost
        $orderItem->total_cost = $orderItem->quantity * $orderItem->unit_price;

        $orderItem->save();

        // Update the total_cost in the associated order
        $this->updateOrderTotalCost($orderItem->order_id);

        return redirect()->route('orders.show', ['order' => $orderItem->order_id])
            ->with('success', 'Order item created successfully');
    }

    

    // Function to update the total_cost in the associated order
    private function updateOrderTotalCost($orderId)
    {
        $order = Order::find($orderId);

        // Calculate the total_cost by summing up the total_cost of all order items
        $order->total_cost = $order->orderItems->sum('total_cost');
        $order->save();
    }
}
