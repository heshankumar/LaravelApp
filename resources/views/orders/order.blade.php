<x-app-layout>
<x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Order Details') }}
        </h2>
    </x-slot>
    


    <div class="py-12">
        <div class="max-w-7xl ml-60 sm:px-6 lg:px-8 space-y-6">
            <div class="">

                
                

                <form method="POST" action="{{route('order.store')}}">
                    @csrf
                    @method('post')

                    <input type="hidden" name="order_id" value="{{ $orderId }}"> <!-- Assuming you pass $orderId from the controller -->

                    <label for="product_id">Product:</label>
                    <select name="product_id" id="product_id">
                        <!-- Populate the select options with products from the database -->
                        @foreach($products as $product)
                            <option value="{{ $product->id }}">{{ $product->name }}</option>
                        @endforeach
                    </select>



                    <label for="quantity">Quantity:</label>
                    <input type="number" name="quantity" required>

                    <button type="submit">Add to Order</button>

                    <!-- <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Customer Name</label>
                        <input class="w-full p-2 border rounded-md" type="text" name="customer_name" placeholder="ex: Heshan de Silva" >
                    </div>
                    
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Address</label>
                        <input class="w-full p-2 border rounded-md" type="text" name="address" placeholder="ex: No.16, Main Street, Dehiwala">
                    </div>
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Email</label>
                        <input class="w-full p-2 border rounded-md" type="text" name="email" placeholder="ex: heshandesilva@gmail.com" >
                    </div>
                    <div class="mb-5">
                        <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Telephone</label>
                        <input class="w-full p-2 border rounded-md" type="text" name="telephone" placeholder="ex: +94769058946" >
                    </div>
                    
                    <div class="mb-5">
                        <input type="submit" value="Save" class="text-gray-900 dark:text-gray-400"/>
                    </div> -->
                </form>

               
            </div>








            








            
        </div>
    </div>
    
</x-app-layout>


