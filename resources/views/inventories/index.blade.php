<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Supplier Details') }}
        </h2>
    </x-slot>

    

    <div class="py-12">
        
        <div class="container ml-60">
            <div class="flex flex-wrap gap-3 ">
                @foreach($products as $index => $product)
                    @if($index > 0 && $index % 6 == 0)
                        </div>
                        <div class="flex flex-wrap gap-3 ">
                    @endif
                    

                    <div class="mb-5 w-60 bg-white  rounded-lg shadow dark:bg-gradient-to-r from-cyan-500 to-emerald-400">
                        <a href="{{route('product.view', ['product' => $product])}}">
                            <img class="rounded-t-lg " src="{{ asset('storage/product_images/' .$product->image) }}" alt="" />
                        
                            <div class="pt-3 p-5">
                                <p class=" font-normal text-gray-700 dark:text-gray-100">{{ $product->manufacturer }}</p>
                                
                                    <h5 class=" text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $product->product_name }}</h5>
                                
                                <div class="flex gap-1 items-baseline ">
                                        
                                    <p class="p-1 text-xl font-bold text-emerald-100  rounded border-emerald-100">{{$product->qty}}</p>
                                    <p class=" font-bold text-emerald-100">units available</p>
                                    

                                </div>
                                <div class="flex gap-1 items-baseline">
                                    <p class=" font-bold text-gray-700 dark:text-gray-900">Rs. </p>
                                    <p class=" font-bold text-3xl text-gray-700 dark:text-gray-900">{{ $product->unit_price }}</p>
                                </div>
    {{--                             

                                <a href="{{route('product.view', ['product' => $product])}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                    More
                                    <svg class="rtl:rotate-180 w-3.5 h-3.5 ms-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                                    </svg>
                                </a> --}}
                            </div>
                    </a>
                </div>


                @endforeach
            </div>
        </div>      
        
    </div>
</x-app-layout>
