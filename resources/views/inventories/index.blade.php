<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
<<<<<<< HEAD
            {{ __('Inventory') }}
=======
            {{ __('Supplier Details') }}
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
        </h2>
    </x-slot>

    

    <div class="py-12">
        
        <div class="container ml-60">
<<<<<<< HEAD
            <div class="flex flex-wrap gap-3 justify-center">
=======
            <div class="flex flex-wrap gap-3 ">
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                @foreach($products as $index => $product)
                    @if($index > 0 && $index % 6 == 0)
                        </div>
                        <div class="flex flex-wrap gap-3 ">
                    @endif
                    

<<<<<<< HEAD
                    <div class="mb-5 w-60 bg-white  rounded-lg shadow dark:bg-gradient-to-r from-cyan-500 to-emerald-400 justify-center">
                        <a href="{{route('product.view', ['product' => $product])}}">
                            <img class="rounded-t-lg " src="{{ asset('storage/product_images/' .$product->image) }}" alt="" />
                        
                            <div class="pt-3 p-5 flex-vertical text-center justify-center mx-auto">
=======
                    <div class="mb-5 w-60 bg-white  rounded-lg shadow dark:bg-gradient-to-r from-cyan-500 to-emerald-400">
                        <a href="{{route('product.view', ['product' => $product])}}">
                            <img class="rounded-t-lg " src="{{ asset('storage/product_images/' .$product->image) }}" alt="" />
                        
                            <div class="pt-3 p-5">
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                                <p class=" font-normal text-gray-700 dark:text-gray-100">{{ $product->manufacturer }}</p>
                                
                                    <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->product_name }}</h5>
                                
<<<<<<< HEAD
                                <div class="flex gap-1 items-baseline text-center mx-auto ">
                                        
                                    <p class="p-1 text-xl font-bold text-emerald-100  rounded border-emerald-100 ">{{$product->qty}}</p>
                                    <p class=" font-bold text-emerald-100 text-center">units available</p>
=======
                                <div class="flex gap-1 items-baseline ">
                                        
                                    <p class="p-1 text-xl font-bold text-emerald-100  rounded border-emerald-100">{{$product->qty}}</p>
                                    <p class=" font-bold text-emerald-100">units available</p>
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                                    

                                </div>
                                <div class="flex gap-1 items-baseline">
<<<<<<< HEAD
                                    <p class=" font-bold text-gray-700 dark:text-gray-900 mb-2">Rs. </p>
=======
                                    <p class=" font-bold text-gray-700 dark:text-gray-900">Rs. </p>
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                                    <p class=" font-bold text-3xl text-gray-700 dark:text-gray-900">{{ $product->unit_price }}</p>
                                </div>
    {{--                             

                                <a href="{{route('product.view', ['product' => $product])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    More
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
<<<<<<< HEAD
                                    </svg>  
                                </a> --}}


                                

                                <a href="{{ route('add_to_cart', $product->id) }}" >
                                    <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                    <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                    </svg>
                                    Add to cart
                                    </button>
                                    
                                </a> 
    
=======
                                    </svg>
                                </a> --}}
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                            </div>
                    </a>
                </div>


                @endforeach
            </div>
        </div>      
        
    </div>
</x-app-layout>
