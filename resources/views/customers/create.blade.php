<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Add a Customer') }}
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
                            
                                <div class="p-6" >
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








