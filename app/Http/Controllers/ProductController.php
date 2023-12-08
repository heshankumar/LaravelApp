<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    public function index() {
        $products =  Product::all();
        return view('products.index', ['products' => $products]);
    }

    public function create() {
        return view('products.create');

    }
    public function store(Request $request) {
        $request->validate([
            'product_name' => 'required',
            'manufacturer' => 'required',
            'qty' => 'required|numeric',
            'unit_price' => 'required|decimal:0,2',
            'supllier_id' => 'required|exists:suppliers,id',
            'type' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);

        $product = new Product;
        $product->product_name = $request->product_name;
        $product->manufacturer = $request->manufacturer;
        $product->qty = $request->qty;
        $product->unit_price = $request->unit_price;
        $product->supllier_id = $request->supllier_id;
        $product->type = $request->type;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            // $image->storeAs('public/images', $imageName);
            $image->move('storage/product_images/', $imageName);
            $product->image = $imageName;
        }

        $product->save();

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');
        
    }

    public function edit($id) {
        $product = Product::find($id);
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, $id) {
        $request->validate([
            'product_name' => 'required',
            'manufacturer' => 'required',
            'qty' => 'required|numeric',
            'unit_price' => 'required|decimal:0,2',
            'supllier_id' => 'required|exists:suppliers,id',
            'type' => 'required',
            'description'=> 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048'
        ]);



        $product= Product::find($id);
        $product->product_name = $request->product_name;
        $product->manufacturer = $request->manufacturer;
        $product->qty = $request->qty;
        $product->unit_price = $request->unit_price;
        $product->supllier_id = $request->supllier_id;
        $product->type = $request->type;
        $product->description = $request->description;

        if ($request->hasFile('image')) {
            $destination = 'storage/product_images/'.$product->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            // $image->storeAs('public/images', $imageName);
            $image->move('storage/product_images/', $imageName);
            $product->image = $imageName;
        }

        $product->update();

        return redirect()->route('product.index')
            ->with('success', 'Product created successfully.');


    }

    public function destroy(Product $product) {
        $product->delete();
        return redirect(route('product.index'));
    }

    public function view(Product $product) {
        return view('products.productview', ['product'=> $product]);
    }

    public function inventory(Product $product) {
        $products =  Product::all();
        return view('inventories.index', compact('products'));
    }
}


