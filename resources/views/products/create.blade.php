<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Add a Product') }}
        </h2>
    </x-slot>

    <div class="py-12 ">
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
                            
                                <div class="p-6" >
                                    <form method="POST" action="{{route('product.store')}}" enctype="multipart/form-data">
                                        @csrf
                                        @method('post')
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Name</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="product_name" placeholder="Name" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Manufacturer</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="manufacturer" placeholder="Manufacturer" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Quantity</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="qty" placeholder="Qty" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Unit Price</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="unit_price" placeholder="Price" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Supllier ID</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="supllier_id" placeholder="Supllier ID" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Category</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="type" placeholder="Category" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Product Description</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="description" placeholder="Product Description" >
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Product Image</label>
                                            <input class="w-full p-2 border rounded-md" type="file" name="image" placeholder="Product Image" >
                                        </div>
                                        <div class="mb-5">
                                            <input type="submit" value="Save the new product" class="text-gray-900 dark:text-gray-400"/>
                                        </div>
                                    </form>
                                </div>
                                
                            
                        </div>
        
                        <div class="p-4 bg-white dark:bg-gray-200/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none ">
                            <img class="flex motion-safe:hover:scale-[1.07] transition-all duration-250 justify-center items-center" src="{{ asset('img/7769804_3230318.svg') }}" alt="list" width="500" height="200" >
                        </div>
                    </div>
                </div>
            </div>

            

          
        </div>
    </div>
</x-app-layout>
















