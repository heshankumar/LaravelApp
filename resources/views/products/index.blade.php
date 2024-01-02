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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100" align="center">
                    {{ __("Product") }}
            </div>
        </div>
        <br>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                    
                    <div>
                        @if(session()->has('success'))
                            <div>
                                {{session('success')}}
                            </div>
                        @endif
                    </div>
                    <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div align="center">
                            <a href="{{route('product.create')}}" >Create a Product</a>
                        </div>
                        <br>
                        <table align="center" border="1" class="table table-hover">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Description</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            @foreach($products as $product )
                                <tr>
                                    <td>{{$product->id}}</td>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->qty}}</td>
                                    <td>{{$product->price}}</td>
                                    <td>{{$product->description}}</td>
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

                        </table>
            </div>








            
        </div>
    </div>
    
</x-app-layout>


