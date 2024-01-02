<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Edit Employee Details') }}
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
                            
                                <div class="p-6" align="left">
                                    <form method="POST" action="{{route('employee.update', ['employee'=>$employee])}}">
                                        @csrf
                                        @method('put')
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">NIC Number</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="nic" placeholder="NIC" value="{{$employee->nic}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Employee Name</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="empl_name" placeholder="Employee Name" value="{{$employee->empl_name}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Position</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="position" placeholder="Position" value="{{$employee->position}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Joined Date</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="joined_date" placeholder="Joined Date" value="{{$employee->joined_date}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Address</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="address" placeholder="Address" value="{{$employee->address}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Email</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="email" placeholder="Email" value="{{$employee->email}}">
                                        </div>
                                        <div class="mb-5">
                                            <label class="mb-3 block text-base font-medium text-gray-900 dark:text-gray-400">Telephone</label>
                                            <input class="w-full p-2 border rounded-md" type="text" name="telephone" placeholder="Telephone" value="{{$employee->telephone}}">
                                        </div>
                                        
                                        <div class="mb-5">
                                            <input type="submit" value="Save" class="text-gray-900 dark:text-gray-400"/>
                                        </div>
                                    </form>
                                </div>
                                
                            
                        </div>
        
                        <div class="p-4 bg-white dark:bg-gray-200/50 dark:bg-gradient-to-bl from-gray-700/50 via-transparent dark:ring-1 dark:ring-inset dark:ring-white/5 rounded-lg shadow-2xl shadow-gray-500/20 dark:shadow-none">
                            <img class="flex motion-safe:hover:scale-[1.07] transition-all duration-250" src="{{ asset('img/8832806_4016255.svg') }}" alt="list" width="500" height="200" border="1" align="center">
                        </div>
                    </div>
                </div>
            </div>

           
        </div>
    </div>
</x-app-layout>



