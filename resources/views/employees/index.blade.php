<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Employee Details') }}
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

        tr td:nth-child(n+10),
        tr th:nth-child(n+10) {
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
                        <thead class="bg-gray-950 text-gray-300">
                            <tr>
                                <th class="p-3">ID</th>
                                <th class="p-3 text-left">NIC No</th>
                                <th class="p-3 text-left">Employee Name</th>
                                <th class="p-3 text-left">Position</th>
                                <th class="p-3 text-left">Joined Date</th>
                                <th class="p-3 text-left">Address</th>
                                <th class="p-3 text-left">Email</th>
                                <th class="p-3 text-left">Telephone</th>
                                <th class="p-3 text-left">Edit</th>
                                <th class="p-3 text-left">Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($employees as $employee )
                            <tr class="bg-gray-700 text-gray-300 ">
                                <td class="p-3">{{$employee->id}}</td>
                                <td class="p-3">{{$employee->nic}}</td>
                                <td class="p-3">{{$employee->empl_name}}</td>
                                <td class="p-3">{{$employee->position}}</td>
                                <td class="p-3">{{$employee->joined_date}}</td>
                                <td class="p-3">{{$employee->address}}</td>
                                <td class="p-3">{{$employee->email}}</td>
                                <td class="p-3">{{$employee->telephone}}</td>
                                <td>
                                    <a href="{{route('employee.edit', ['employee' => $employee])}}">Edit</a> |
                                </td>
                                <td>
                                    <form method="post" action="{{route('employee.destroy', ['employee'=> $employee])}}">
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
                    <a href="{{ route('employee.create') }}">Add a new Employee</a>
                </button>
                
            </div>


        </div>
    </div>
</x-app-layout>
