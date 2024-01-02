<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Edit Product Details') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl ml-60 sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
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
                        <div class="p-6 md:grid md:grid-cols-2 md:gap-6  ">
                            
                                <div class="p-6" align="left">
                                    <form method="POST" action="{{route('product.update', $product->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        @method('put')
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Name</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="product_name" placeholder="Name" value="{{$product->product_name}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Manufacturer</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="manufacturer" placeholder="Manufacturer" value="{{$product->manufacturer}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Quantity</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="qty" placeholder="Quantity" value="{{$product->qty}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Unit Price</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="unit_price" placeholder="Unit Price" value="{{$product->unit_price}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Supllier ID</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="supllier_id" placeholder="Supllier ID" value="{{$product->supllier_id}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Category</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="type" placeholder="Category" value="{{$product->type}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Product Description</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="description" placeholder="Product Description" value="{{$product->description}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Product Image</label>
                                            <input class="w-full p-2 border rounded-md" type="file" name="image" placeholder="Product Image" value="{{$product->image}}">
                                        </div>
                                        <div class="mb-5">
                                            <input type="submit" value="Edit Product" class="text-gray-900 dark:text-gray-400"/>
                                        </div>
                                    </form>
                                </div>
                                
                            
                        </div>
        
                        <div class="p-4 bg-white dark:bg-gray-200/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
                            <img class="flex motion-safe:hover:scale-[1.07] transition-all duration-250" src="{{ asset('img/8832806_4016255.svg') }}" alt="list" width="500" height="200" border="1" align="center">
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</x-app-layout>



