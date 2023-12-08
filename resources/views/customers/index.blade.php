<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Customer Details') }}
        </h2>
    </x-slot>

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

    <div class="py-12">
        <div class="max-w-screen-xl ml-60 sm:px-6 lg:px-8 space-y-6 " >
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-200 shadow sm:rounded-lg mx-auto">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table-auto text-gray-400 border-separate space-y-6 text-sm mx-auto">
                        <thead class="bg-gray-800 text-gray-300">
                            <tr>
                                <th class="p-3">ID</th>
                                <th class="p-3 text-left">Customer Name</th>
                                <th class="p-3 text-left">Address</th>
                                <th class="p-3 text-left">Email</th>
                                <th class="p-3 text-left">Telephone</th>
                                <th class="p-3 text-left">Edit</th>
                                <th class="p-3 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($customers as $customer )
                            <tr class="bg-gray-700 text-gray-300 ">
                                <td class="p-3">{{$customer->id}}</td>
                                <td class="p-3">{{$customer->customer_name}}</td>
                                <td class="p-3">{{$customer->address}}</td>
                                <td class="p-3">{{$customer->email}}</td>
                                <td class="p-3">{{$customer->telephone}}</td>
                                <td>
                                    <a href="{{route('customer.edit', ['customer' => $customer])}}">Edit</a> |
                                </td>
                                <td>
                                    <form method="post" action="{{route('customer.destroy', ['customer'=> $customer])}}">
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

            <div class=" mx-auto">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full ">
                    <a href="{{ route('customer.create') }}">Add a new customer</a>
                </button>
                
            </div>


        </div>
        
    </div>
</x-app-layout>
