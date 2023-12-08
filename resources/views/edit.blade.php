<x-app-layout>
<body>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit') }}
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
        <form method="POST" action="{{route('product.update', ['product'=>$product])}}">
            @csrf
            @method('put')
            <div>
                <label>Name</label>
                <input type="text" name="name" placeholder="Name" value="{{$product->name}}">
            </div>
            <div>
                <label>Qty</label>
                <input type="text" name="qty" placeholder="Qty" value="{{$product->qty}}">
            </div>
            <div>
                <label>Price</label>
                <input type="text" name="price" placeholder="Price" value="{{$product->price}}">
            </div>
            <div>
                <label>Description</label>
                <input type="text" name="description" placeholder="Description" value="{{$product->description}}">
            </div>
            <div>
                <input type="submit" value="Edit Product"/>
            </div>
        </form>
        </div>
</body>
</x-app-layout>