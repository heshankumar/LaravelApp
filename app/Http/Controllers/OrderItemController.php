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

<<<<<<< HEAD
        // $orderItem = new OrderItem([
        //     'order_id' => $request->input('order_id'),
        //     'product_id' => $product->id, // Adjust this based on your product structure
        //     'quantity' => $request->input('quantity'),
        //     'unit_price' => $product->unit_price,
        // ]);

        $orderItem = new OrderItem;

        $orderItem->order_id = $request->input('order_id');
        $orderItem->product_id = $product->id;
        $orderItem->quantity = $request->quantity;
        // $orderItem->unit_price = $product->unit_price;

        // Calculate total_cost
        $orderItem->total_cost = $orderItem->quantity * $product->unit_price;
=======
        $orderItem = new OrderItem([
            'order_id' => $request->input('order_id'),
            'product_id' => $request->input('product_id'),
            'quantity' => $request->input('quantity'),
            'unit_price' => $product->unit_price,
        ]);

        // Calculate total_cost
        $orderItem->total_cost = $orderItem->quantity * $orderItem->unit_price;
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1

        $orderItem->save();

        // Update the total_cost in the associated order
        $this->updateOrderTotalCost($orderItem->order_id);

        return redirect()->route('orders.show', ['order' => $orderItem->order_id])
            ->with('success', 'Order item created successfully');
    }

<<<<<<< HEAD
=======
    

>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
    // Function to update the total_cost in the associated order
    private function updateOrderTotalCost($orderId)
    {
        $order = Order::find($orderId);
<<<<<<< HEAD
        $item = OrderItem::where('order_id', $orderId)->get();

        // Calculate the total_cost by summing up the total_cost of all order items
        // $order->order_total = $order->orderItems->sum('total_cost');
        $order->order_total = $item->sum('total_cost');
        
=======

        // Calculate the total_cost by summing up the total_cost of all order items
        $order->total_cost = $order->orderItems->sum('total_cost');
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
        $order->save();
    }
}
