<nav x-data="{ open: false }" class="bg-white dark:bg-emerald-400 border-b border-gray-100 dark:border-gray-700">
    <!-- Primary Navigation Menu -->
    <div class="max-w-full ml-56 px-4 sm:px-6 lg:px-8 ">

    
        <div class="flex justify-between h-16 ">





            
                <div class="flex">
                    <!-- Logo -->
                    <div class="shrink-0 flex items-center">
                        <a href="{{ route('product.index') }}">
                            <img src="{{ asset('img/inventory32.png') }}" alt="Inventory" >
                        </a>
                    </div>

                    <!-- Navigation Links -->
                    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')" class="text-gray-800 dark:text-gray-900 text-xl">
                            {{ __('Dashboard') }}
                        </x-nav-link>
                        <x-nav-link :href="route('product.create')" :active="request()->routeIs('dashboard')" class="text-gray-800 dark:text-gray-900 text-xl">
                            {{ __('Add Products') }}
                        </x-nav-link>
                    </div>
                </div>
            

            <!-- cart -->

            <!-- <div class="dropdown">
                 
                <button id="dLabel" type="button" class="btn btn-primary" data-bs-toggle="dropdown">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i> Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>
                </button>
 
                <div class="dropdown-menu" aria-labelledby="dLabel">
                    <div class="row total-header-section">
                        @php $total = 0 @endphp
                        @foreach((array) session('cart') as $id => $details)
                            @php $total += $details['unit_price'] * $details['qty'] @endphp
                        @endforeach
                        <div class="col-lg-12 col-sm-12 col-12 total-section text-right">
                            <p>Total: <span class="text-success">$ {{ $total }}</span></p>
                        </div>
                    </div>
                    @if(session('cart'))
                        @foreach(session('cart') as $id => $details)
                            <div class="row cart-detail">
                                <div class="col-lg-4 col-sm-4 col-4 cart-detail-img">
                                    <img src="{{ asset('img') }}/{{ $details['image'] }}" />
                                </div>
                                <div class="col-lg-8 col-sm-8 col-8 cart-detail-product">
                                    <p>{{ $details['product_name'] }}</p>
                                    <span class="price text-success"> ${{ $details['unit_price'] }}</span> <span class="count"> Quantity:{{ $details['qty'] }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                    <div class="row">
                        <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                            <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                        </div>
                    </div>
                </div>
                 
            </div>



            <div class="row">
                <div class="col-lg-12 col-sm-12 col-12 text-center checkout">
                    <a href="{{ route('cart') }}" class="btn btn-primary btn-block">View all</a>
                </div>
            </div> -->

                <!-- cart modify -->

            <div class= "flex ">

                <div class="hidden sm:flex sm:items-center sm:ml-6 ">
                    <x-dropdown align="right" width="48" >
                        <x-slot name="trigger" class="flex items-center">
                            <button class="w-26 h-10 text-white bg-gradient-to-r from-cyan-400 via-cyan-500 to-cyan-600 hover:bg-gradient-to-br   shadow-lg shadow-cyan-500/50 dark:shadow-lg dark:shadow-cyan-800/80 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-1 flex ">
                                <svg class="w-3.5 h-3.5 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 18 21">
                                    <path d="M15 12a1 1 0 0 0 .962-.726l2-7A1 1 0 0 0 17 3H3.77L3.175.745A1 1 0 0 0 2.208 0H1a1 1 0 0 0 0 2h.438l.6 2.255v.019l2 7 .746 2.986A3 3 0 1 0 9 17a2.966 2.966 0 0 0-.184-1h2.368c-.118.32-.18.659-.184 1a3 3 0 1 0 3-3H6.78l-.5-2H15Z"/>
                                </svg>
                                Cart <span class="badge bg-danger">{{ count((array) session('cart')) }}</span>

                                
                            </button>

                            
                            
                        </x-slot>

                        <x-slot name="content" class="w-60">

                            <div class="row total-header-section">
                                @php $total = 0 @endphp
                                @foreach((array) session('cart') as $id => $details)
                                    @php $total += $details['unit_price'] * $details['qty'] @endphp
                                @endforeach
                                <div class="mb-4 text-center font-bold text-cyan-600">
                                    <p>Total: <span class="text-success  ">$ {{ $total }}</span></p>
                                </div>
                            </div>
                            @if(session('cart'))
                                @foreach(session('cart') as $id => $details)

                                
                                
                                    <div class="flex items-center mb-4 ml-4">
                                        
                                            
                                            <p class=" mx-2 ">{{ $details['product_name'] }}</p>
                                            
                                            <p class="mx-2"> Quantity:{{ $details['qty'] }}</p>
                                        
                                    </div>
                                @endforeach
                            @endif
                            <div class="row">
                                <div class="text-center">
                                    <a href="{{ route('cart') }}" class="w-20 h-8 relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-pink-500 to-orange-400 group-hover:from-pink-500 group-hover:to-orange-400 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-pink-200 dark:focus:ring-pink-800">View all</a>
                                </div>
                            </div>

                            
                        </x-slot>
                    </x-dropdown>
                </div>
            



                <!-- Settings Dropdown -->
                <div class="hidden sm:flex sm:items-center sm:ml-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-800 bg-white dark:bg-gray-300 hover:text-gray-900 dark:hover:text-gray-900 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>

            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 dark:text-gray-500 hover:text-gray-500 dark:hover:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-900 focus:outline-none focus:bg-gray-100 dark:focus:bg-gray-900 focus:text-gray-500 dark:focus:text-gray-400 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200 dark:border-gray-600">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
