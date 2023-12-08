<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        <!-- Styles -->

    </head>
    <body >
        
        <div class=" max-w-full mx-auto min-h-screen bg-auto " style="background-image: url('img/15186165_5566879.jpg')">
            @if (Route::has('login'))
                <div class="  bg-opacity-50 bg-white rounded-lg p-8 blur-lg  text-right z-10 backdrop-filter backdrop-blur-sm">
                    @auth
                        <a href="{{ route('product.index') }}" class="font-semibold text-gray-600 text-lg hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        
                    @else
                        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 text-lg dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 text-lg dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="max-w-full mx-auto p-6 lg:p-8">
                <div class="flex justify-center">
                    

                </div>

                
                    
                    <div class="flex justify-center items-center h-full">
                        
                            <div class="container mx-auto bg-opacity-50 bg-white rounded-lg p-8 backdrop-filter backdrop-blur-sm grid grid-cols-2 gap-4 align-middle justify-center items-center">
                                <div class="justify-center">
                                    <h1 class="text-5xl font-bold text-gray-900">Inventory Management System</h1>
                                    <p class="mt-4 text-gray-700 text-xl font-semibold ">Elevate your inventory management with our cutting-edge system! Streamline control, boost efficiency, and save big. Experience real-time updates and powerful analytics, and say goodbye to waste. Join the inventory revolution. </p>
                                    <button class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">
                                        <a href="{{ route('login') }}">Start Today!</a>
                                    </button>
                                    
                                </div>
                                <div>
                                    <img src="{{ asset('img/inventory.svg') }}" alt="Inventory">
                                </div>
                            </div>
                            

                            

                            
                            
                        
                    </div>
                

                
            </div>
        </div>
    </body>
</html>
