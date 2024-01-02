<x-app-layout>

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

        tr td:nth-child(n+9),
        tr th:nth-child(n+9) {
            border-radius: 0 .625rem .625rem 0;
        }

        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>


    <div class="py-12">
        <div class="max-w-7xl ml-60 sm:px-6 lg:px-8 space-y-6">
            <div class="h-44 grid grid-cols-4 gap-8 content-center justify-center p-4 sm:p-8 bg-white dark:bg-gray-200 shadow sm:rounded-lg">
                

                <div class="w-full max-w-xs h-36 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gradient-to-r from-red-400 to-orange-500  dark:border-gray-100 mx-auto">
                    <div class="justify-center">
                        <div class="flex justify-center items-baseline text-gray-900 dark:text-white">
                            
                            <h1 class="  text-5xl font-extrabold tracking-tight">1</span>
                            
                        </div>
                        <h2 class="text-center mb-4 text-xl font-medium text-gray-500 dark:text-gray-100">Pending Orders</h5>
                    </div>
                </div>

                <div class="w-full max-w-xs h-36 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gradient-to-r from-cyan-400 to-sky-600 dark:border-orange-100 mx-auto">
                    <div class="justify-center">
                        <div class="flex justify-center items-baseline text-gray-900 dark:text-white">
                            
                            <h1 class="  text-5xl font-extrabold tracking-tight">1</span>
                            
                        </div>
                        <h2 class="text-center mb-4 text-xl font-medium text-gray-500 dark:text-gray-100">Completed Orders</h5>
                    </div>
                </div>

                <div class="w-full max-w-xs h-36 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gradient-to-r from-fuchsia-600 to-violet-800 dark:border-gray-100 mx-auto">
                    <div class="justify-center">
                        <div class="flex justify-center items-baseline text-gray-900 dark:text-white">
                            
                            <h1 class="  text-5xl font-extrabold tracking-tight">0</span>
                            
                        </div>
                        <h2 class="mb-4 text-center text-xl font-medium text-gray-500 dark:text-gray-100">Products low on Stock</h5>
                    </div>
                </div>

                <div class="w-full max-w-xs h-36 p-4 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gradient-to-r from-teal-400 to-emerald-600 dark:border-gray-100 mx-auto">
                    <div class="justify-center">
                        <div class="flex justify-center items-baseline text-gray-900 dark:text-white">
                            
                            <h1 class="  text-5xl font-extrabold tracking-tight">{{$outOfStockCount}}</span>
                            
                        </div>
                        <h2 class="mb-4 text-center text-xl font-medium text-gray-500 dark:text-gray-100">Products out of Stock</h5>
                    </div>
                </div>
            </div>








            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">

                

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gradient-to-r from-gray-600 to-gray-700 dark:text-gray-400">
            <tr>
                <th class="p-3">ID</th>
                <th class="p-3 text-left">Product Name</th>
                <th class="p-3 text-left">Manufacturer</th>
                <th class="p-3 text-left">Quantity</th>
                <th class="p-3 text-left">Unit Price</th>
                <th class="p-3 text-left">Supplier ID</th>
                <th class="p-3 text-left">Category</th>
                
                <th class="p-3 text-left">Delete</th>
                <th class="p-3 text-left">Details</th>
            </tr>
        </thead>
        <tbody>
            @foreach($products as $product )
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                <td class="p-3">{{$product->id}}</td>
                <td class="p-3">{{$product->product_name}}</td>
                <td class="p-3">{{$product->manufacturer}}</td>
                <td class="p-3">{{$product->qty}}</td>
                <td class="p-3">{{$product->unit_price}}</td>
                <td class="p-3">{{$product->supllier_id}}</td>
                <td class="p-3">{{$product->type}}</td>
                
                <td>
                    <form method="post" action="{{route('product.destroy', ['product'=> $product])}}">
                        @csrf
                        @method('delete')
                        <input type="submit" value="Delete"/>
                    </form>
                </td>
                <td>
                    <a href="{{route('product.view', ['product' => $product])}}">View</a> 
                </td>
            </tr>
            @endforeach
            
        </tbody>
    </table>
</div>

                
            </div>








            
        </div>
    </div>
    
</x-app-layout>


