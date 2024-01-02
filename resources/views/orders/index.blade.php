<x-app-layout>

<<<<<<< HEAD
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>
=======
    
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1


    <div class="py-12">
        <div class="max-w-7xl ml-60 sm:px-6 lg:px-8 space-y-6">
            <div class="">

<<<<<<< HEAD
                
=======
                <h1>Customer Details </h1>
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
                

                <form method="POST" action="{{route('customer.store')}}">
                    @csrf
                    @method('post')

                    <div class="mb-5">
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
                    </div>
                </form>

               
            </div>








<<<<<<< HEAD
            
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    
</div>

                
            </div>
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1








<<<<<<< HEAD
            
=======
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                
            </div>
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
        </div>
    </div>
    
</x-app-layout>


