<x-app-layout>
    <body>

        <link
            href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
            rel="stylesheet">
            <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <style>
            .table {
                border-spacing: 0 15px;
            }

            i {
                font-size: 1rem !important;
            }

            .table tr {
                border-radius: 20px;
            }

            tr td:nth-child(n+7),
            tr th:nth-child(n+7) {
                border-radius: 0 .625rem .625rem 0;
            }

            tr td:nth-child(1),
            tr th:nth-child(1) {
                border-radius: .625rem 0 0 .625rem;
            }
        </style>



        <!-- component -->
<!-- This is an example component -->

        <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
        <script src="https://unpkg.com/alpinejs" defer></script>

        <div class='flex items-top justify-center bg-gray-900 scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent     shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500' >
            <div >

                <div >
                <!-- <div class='max-w-md mx-auto space-y-6'> keep only one of these 2-->
                    
            
                    
            
                    <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                        <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                                      
                        </div>
                        <div class='flex items-center px-2 py-3'>
                            <div class='mx-3'>
                                <button class="hover:underline flex items-center justify-center text-white" > Available Stocks </button>
                            </div>
                        </div>
                    </div>

                    
                                <link
                        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                        rel="stylesheet">
                        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                            
                                <div class="overflow-auto lg:overflow-visible ">
                                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                        <thead class="bg-gray-800 text-gray-300">
                                            <tr>
                                                <th class="p-3">ID</th>
                                                <th class="p-3 text-left">Name</th>
                                                <th class="p-3 text-left">Quantity</th>
                                                <th class="p-3 text-left">Unit Price</th>
                                                <th class="p-3 text-left">Description</th>
                                                <th class="p-3 text-left">Edit</th>
                                                <th class="p-3 text-left">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product )
                                            <tr class="bg-gray-800">
                                                <td class="p-3">{{$product->id}}</td>
                                                <td class="p-3">{{$product->name}}</td>
                                                <td class="p-3">{{$product->qty}}</td>
                                                <td class="p-3">{{$product->price}}</td>
                                                <td class="p-3">{{$product->description}}</td>
                                                <td>
                                                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a> |
                                                </td>
                                                <td>
                                                    <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete"/>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            
                        




                    

                </div>
            </div>
        </div>

        <!-- hvhjkl -->


        <div class='flex items-top justify-center bg-gray-900 scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent   shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500' x-data="{ reportsOpen: false }">
            <div >
                
                <div >
                <!-- <div class='max-w-md mx-auto space-y-6'> keep only one of these 2-->
                    
            
                    
            
                    <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                        <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>          
                        </div>
                        <div class='flex items-center px-2 py-3'>
                            <div class='mx-3'>
                                <button class="hover:underline"> Orders</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                    x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                <link
                        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                        rel="stylesheet">
                        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                        <div class="flex items-top justify-center  bg-gray-900 scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent  shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="col-span-12">
                                <div class="overflow-auto lg:overflow-visible ">
                                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                        <thead class="bg-gray-800 text-gray-300">
                                            <tr>
                                                <th class="p-3">ID</th>
                                                <th class="p-3 text-left">Name</th>
                                                <th class="p-3 text-left">Quantity</th>
                                                <th class="p-3 text-left">Price</th>
                                                <th class="p-3 text-left">Description</th>
                                                <th class="p-3 text-left">Edit</th>
                                                <th class="p-3 text-left">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product )
                                            <tr class="bg-gray-800">
                                                <td class="p-3">{{$product->id}}</td>
                                                <td class="p-3">{{$product->name}}</td>
                                                <td class="p-3">{{$product->qty}}</td>
                                                <td class="p-3">{{$product->price}}</td>
                                                <td class="p-3">{{$product->description}}</td>
                                                <td>
                                                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a> |
                                                </td>
                                                <td>
                                                    <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete"/>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>


        <div class='flex items-top justify-center bg-gray-900 scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent  shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500' x-data="{ reportsOpen: false }">
            <div >
                
                <div >
                <!-- <div class='max-w-md mx-auto space-y-6'> keep only one of these 2-->
                    
            
                    
            
                    <div @click="reportsOpen = !reportsOpen" class='flex items-center text-gray-600 w-full border-b overflow-hidden mt-32 md:mt-0 mb-5 mx-auto'>
                        <div class='w-10 border-r px-2 transform transition duration-300 ease-in-out' :class="{'rotate-90': reportsOpen,' -translate-y-0.0': !reportsOpen }">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                            </svg>          
                        </div>
                        <div class='flex items-center px-2 py-3'>
                            <div class='mx-3'>
                                <button class="hover:underline"> Customer Details</button>
                            </div>
                        </div>
                    </div>

                    <div class="flex p-5 md:p-0 w-full transform transition duration-300 ease-in-out border-b pb-10"
                    x-cloak x-show="reportsOpen" x-collapse x-collapse.duration.500ms >
                                <link
                        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
                        rel="stylesheet">
                        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
                        <div class="flex items-top justify-center  bg-gray-900 scale-100 p-6 dark:bg-gray-800/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none focus:outline focus:outline-2 focus:outline-red-500">
                            <div class="col-span-12">
                                <div class="overflow-auto lg:overflow-visible ">
                                    <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                        <thead class="bg-gray-800 text-gray-300">
                                            <tr>
                                                <th class="p-3">ID</th>
                                                <th class="p-3 text-left">Name</th>
                                                <th class="p-3 text-left">Quantity</th>
                                                <th class="p-3 text-left">Price</th>
                                                <th class="p-3 text-left">Description</th>
                                                <th class="p-3 text-left">Edit</th>
                                                <th class="p-3 text-left">Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($products as $product )
                                            <tr class="bg-gray-800">
                                                <td class="p-3">{{$product->id}}</td>
                                                <td class="p-3">{{$product->name}}</td>
                                                <td class="p-3">{{$product->qty}}</td>
                                                <td class="p-3">{{$product->price}}</td>
                                                <td class="p-3">{{$product->description}}</td>
                                                <td>
                                                    <a href="{{route('product.edit', ['product' => $product])}}">Edit</a> |
                                                </td>
                                                <td>
                                                    <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                                                        @csrf
                                                        @method('delete')
                                                        <input type="submit" value="Delete"/>
                                                    </form>
                                                </td>
                                            </tr>
                                            
                                            @endforeach    
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>




                    </div>

                </div>
            </div>
        </div>

    </body>
</x-app-layout>




