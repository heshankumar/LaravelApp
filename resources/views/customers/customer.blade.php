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
        <div class="max-w-screen-xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-200 shadow sm:rounded-lg mx-auto">
                <div class="overflow-auto lg:overflow-visible ">
                    <table class="table-auto text-gray-400 border-separate space-y-6 text-sm mx-auto">
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
                                
                        </tbody>
                    </table>
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-200 shadow sm:rounded-lg">
                
            </div>


        </div>
    </div>
</x-app-layout>
