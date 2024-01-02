<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    


    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet">
        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <div class="flex items-center justify-center min-h-screen bg-gray-900">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                    <thead class="bg-gray-800 text-gray-500">
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
</x-app-layout>
