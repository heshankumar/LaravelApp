<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-gray-350" style="background-image: url('img/15186165_5566879.jpg')>
            @include('layouts.navigation')

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-gray-700 dark:bg-gradient-to-r from-green-400 to-blue-500 shadow max-w-full ml-40">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            
<button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ms-3 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
   <span class="sr-only">Open sidebar</span>
   <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
   <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
   </svg>
</button>



<aside id="default-sidebar" class="fixed top-0 left-0 z-40 w-55 h-screen transition-transform -translate-x-full sm:translate-x-0" aria-label="Sidebar">
   <div class="h-full px-3 py-4 overflow-y-auto bg-gray-50 dark:bg-gray-50 ">
      <ul class="space-y-2 font-medium">
         <li>
            <a href="{{ route('product.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
               <img src="{{ asset('img/dashboard.png') }}" alt="dashboard" >
               <span class="ms-3">Dashboard</span>
            </a>
         </li>
         <li>
            <a href="{{ route('inventory.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/inventory2.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Inventory</span>
               
            </a>
         </li>
         <li>
            <a href="{{ route('order.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 groupp">
            <img src="{{ asset('img/orders.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Orders</span>
               
            </a>
         </li>
         <li>
            <a href="" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/purchases.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Purchases</span>
            </a>
         </li>
         <li>
            <a href="#" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/sales.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Sales</span>
            </a>
         </li>
         <li>
            <a href="{{ route('supplier.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/suppliers.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Suppliers</span>
            </a>
         </li>
         <li>
            <a href="{{ route('customer.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/customers.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Customers</span>
            </a>
         </li>
         <li>
            <a href="{{ route('employee.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
            <img src="{{ asset('img/employees.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Employees</span>
            </a>
         </li>
         <li>
            <a href="{{ route('warehouse.index') }}" class="flex items-center p-2 text-gray-900 rounded-lg dark:text-gray-900 hover:bg-gray-100 dark:hover:bg-gray-300 group">
               <img src="{{ asset('img/warehouse.png') }}" alt="Inventory" >
               <span class="flex-1 ms-3 whitespace-nowrap">Warehouses</span>
            </a>
         </li>
      </ul>
   </div>
</aside>




            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
