<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl ml-60 sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8  sm:rounded-lg">
                <div>
                    @if ($errors->any())
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
        
                <div class="mt-5">
                    <div class="grid md:grid md:grid-cols-2 md:gap-6 lg:gap-8">

                        <div class="   ">
                            <img class="flex motion-safe:hover:scale-[1.07] transition-all duration-250 justify-center items-center" src="{{ asset('storage/product_images/' .$product->image) }}" alt="list" width="500" height="200" >
                        </div>


                        <div class=" ">
                            
                                <div class="p-6" >
                                    <div class="flex gap-4 items-center">
                                        <h1 class="text-5xl font-bold">{{$product->product_name}}</h1>
                                        
                                        <span>
                                            @if($product->qty > 1)
                                                <p class="text-emerald-500 text-2xl font-bold" >In Stock</p>
                                            @else
                                                <p class="text-red-600 text-2xl font-bold">Out of stock</p>
                                            @endif
                                        </span>
                                    </div>
                                    
                                    <div class="flex gap-1 items-baseline">
                                        <p class="text-2xl font-bold italic">{{$product->manufacturer}}</p>
                                        
                                    </div>
                                    <br>
                                    <div class="flex gap-2 items-center ">
                                    
                                        <p class="p-1 text-3xl font-bold text-emerald-500 border-2 rounded border-emerald-500">{{$product->qty}}</p>
                                        <p class="text-lg font-bold">units available</p>
                                        

                                    </div>
                                    
                                    <br>
                                    <div class="flex gap-1 items-baseline">
                                        <p class="text-lg ">{{$product->description}}</p>
                                        
                                    </div>
                                    <br>
                                    <div class="flex gap-1 items-center ">
                                        <p class="text-3xl font-bold">Rs {{$product->unit_price}}</p>
                                        <p class="text-lg font-bold">per unit</p>
                                    </div>
                                    <br>
                                    <div>
                                        <button type="button" class="text-white bg-gradient-to-r from-teal-400 via-teal-500 to-teal-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-teal-300 dark:focus:ring-teal-800 shadow-lg shadow-teal-500/50 dark:shadow-lg dark:shadow-teal-800/80 hover:bg-blue-800 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700">
                                            <a href="{{route('product.edit', $product->id)}}">Edit Details</a>
                                        </button>
                                    </div>

                                    
                                    
                                    
                                </div>
                                
                            
                        </div>
        
                        
                    </div>
                </div>
            </div>


            

            

          
        </div>
        
    </div>
</x-app-layout>
















