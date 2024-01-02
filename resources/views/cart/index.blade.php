<x-app-layout>
    <x-slot name="header" >
        <h2 class="font-semibold text-xl   text-gray-800 dark:text-gray-900 leading-tight">
            {{ __('Cart') }}
        </h2>
    </x-slot>

    <table id="cart" class=" ml-60 mr-20">
    <thead class="mb-8 h-16">
        <tr class="border-b border-neutral-500 mb-8">
            <th style="width:45%">Product</th>
            <th style="width:10%">Price</th>
            <th style="width:10%">Quantity</th>
            <th style="width:20%" class="text-center">Subtotal</th>
            <th style="width:15%"></th>
        </tr>
        <tr class="h-4">
            <td></td>
        </tr>
    </thead>
    <tbody class="mt-10">
        @php $total = 0 @endphp
        @if(session('cart'))
            @foreach(session('cart') as $id => $details)
                @php $total += $details['unit_price'] * $details['qty'] @endphp
                <tr class="border-b border-neutral-500" data-id="{{ $id }}">
                    <td data-th="Product">
                        <div class="flex mb-8 gap-32 items-center">
                            <div ><img src="{{ asset('storage/product_images') }}/{{ $details['image'] }}" width="150" height="100" class="img-responsive"/></div>
                            <div >
                                <h4 >{{ $details['product_name'] }}</h4>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">${{ $details['unit_price'] }}</td>
                    
                    <td data-th="Quantity">
                        <input type="number" value="{{ $details['qty'] }}" class="form-control quantity cart_update" min="1" />
                    </td>
                    <td data-th="Subtotal" class="text-center">${{ $details['unit_price'] * $details['qty'] }}</td>
                    <td class="actions" data-th="">
                        <button class="btn btn-danger btn-sm cart_remove"><i class="fa fa-trash-o"></i> Delete</button>
                    </td>
                </tr>
            @endforeach
        @endif
    </tbody>
    <tfoot class="mt-8 h-8">
    <tr class="h-4">
        <td></td>
    </tr>
        <tr class="mb-8 h-8">
            <td colspan="4"  style="text-align:center;"><h3><strong class="p-1  text-2xl font-bold text-emerald-500 border-2 rounded border-emerald-500">Total ${{ $total }}</strong></h3></td>
        </tr>
        <tr class="h-4">
            <td></td>
        </tr>
        <tr class="mt-20 h-8">
            <td colspan="4" style="text-align:center;">
                <form action="/session" method="POST">
                <a href="{{ url('/inventory') }}" class="text-white bg-green-700 hover:bg-green-800 focus:outline-none focus:ring-4 focus:ring-green-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800"> <i class="fa fa-arrow-left"></i> Continue Shopping</a>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900" type="submit" id="checkout-live-button"><i class="fa fa-money"></i> Checkout</button>
                </form>
            </td>
        </tr>
    </tfoot>
</table>

    

<script type="text/javascript">
    
    $(".cart_update").change(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        $.ajax({
            url: '{{ route('update_cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}', 
                id: ele.parents("tr").attr("data-id"), 
                quantity: ele.parents("tr").find(".qty").val()
            },
            success: function (response) {
               window.location.reload();
            }
        });
    });
    
    $(".cart_remove").click(function (e) {
        e.preventDefault();
    
        var ele = $(this);
    
        if(confirm("Do you really want to remove?")) {
            $.ajax({
                url: '{{ route('remove_from_cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}', 
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    window.location.reload();
                }
            });
        }
    });
    
</script>
</x-app-layout>








