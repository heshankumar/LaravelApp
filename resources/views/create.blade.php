<x-app-layout>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Create') }}
        </h2>
    </x-slot>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
        @endif
    </div>
    <div class="p-6 text-gray-900 dark:text-gray-400" align="center">
        <form method="POST" action="{{route('product.store')}}">
            @csrf
            @method('post')
            <div>
                <label >Name</label>
                <input type="text" name="name" placeholder="Name" >
            </div>
            <div>
                <label >Qty</label>
                <input type="text" name="qty" placeholder="Qty" >
            </div>
            <div>
                <label >Price</label>
                <input type="text" name="price" placeholder="Price" >
            </div>
            <div>
                <label >Description</label>
                <input type="text" name="description" placeholder="Description" >
            </div>
            <div>
                <input type="submit" value="Save the new product"/>
            </div>
        </form>
    </div>
</body>
</x-app-layout>