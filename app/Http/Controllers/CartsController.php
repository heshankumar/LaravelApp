<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartsController extends Controller
{
    //
    public function cart()
    {
        return view('cart.index');
    }
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
 
        $cart = session()->get('cart', []);
 
        if(isset($cart[$id])) {
            $cart[$id]['qty']++;
        }  else {
            $cart[$id] = [
                "product_name" => $product->product_name,
                "image" => $product->image,
                "unit_price" => $product->unit_price,
                "qty" => 1
            ];
        }
 
        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
 
    public function update(Request $request)
    {
        if($request->id && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }
 
    public function remove(Request $request)
    {
        if($request->id) {
            $cart = session()->get('cart');
            if(isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
