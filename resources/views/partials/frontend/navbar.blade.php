<a class="hidden lg:flex xl:hidden justify-center pt-4" href="{{route('home')}}">
    <img src="{{asset('imgs/logo.png')}}" alt="Logo"  class="w-32 my-auto">
</a>
<div class="w-full text-black dark-mode:text-gray-200 dark-mode:bg-gray-800">
    <div x-data="{ open: false }" class="border-b border-white flex flex-col container px-4 mx-auto lg:items-center lg:justify-between lg:flex-row">
        <div class="flex p-4 flex-row items-center justify-between">
            <a class="lg:hidden xl:flex items-center px-2" href="{{ route('home') }}">
                <img src="{{asset('imgs/logo.png')}}" alt="Logo" class="w-32 my-auto">
            </a>
            <button class="lg:hidden rounded-lg focus:outline-none focus:shadow-outline" @click="open = !open">
                <svg fill="currentColor" viewBox="0 0 20 20" class="w-6 h-6 text-white">
                    <path x-show="!open" fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                    <path x-show="open" fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" style="display: none;"></path>
                </svg>
            </button>
        </div>
        <nav :class="{'flex': open, 'hidden': !open}" class="flex-col flex-grow my-4 pb-4 text-lg lg:pb-0 hidden lg:flex lg:justify-center lg:flex-row lg:mx-auto xl:justify-end">

            <a href="{{route('home')}}" class="block text-white font-extrabold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('home') ? 'active' : '' }}">Home</a>

            <a href="{{route('about')}}" class="block text-white font-extrabold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('about') ? 'active' : '' }}">About</a>

            <div @click.away="open = false" x-data="{ open: false }" class="group inline-block relative">
                <button @click="open = !open"
                    class=" inline-flex text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('services') ? 'active' : '' }} items-center">
                    <span class="mr-1">Services</span>
                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 ml-1 transition-transform duration-200 transform rotate-0">
                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                    </svg>
                </button>

                    <ul x-show="open" x-transition:enter="transition ease-out duration-100"
                    x-transition:enter-start="transform opacity-0 scale-95"
                    x-transition:enter-end="transform opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75"
                    x-transition:leave-start="transform opacity-100 scale-100"
                    x-transition:leave-end="transform opacity-0 scale-95"
                    class="absolute left-0  mt-2 origin-top-right rounded-md shadow-lg md:w-48 hidden text-base text-white bg-primary-two group-hover:block z-20 w-48"
                    :class="{'hidden': !open}" style="display: none;">
                         
                        @foreach($services as $service)
                            <li><a href="{{ route('services.show',$service->slug) }}"  class="border-b border-gray-600 hover:bg-primary-one py-2 px-4 block">{{ $service->name }}</a></li>
                        @endforeach
                    </ul>
            </div>

            <a href="{{route('blogs')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a>
            <a href="{{route('pricing')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('pricing') ? 'active' : '' }}">Pricing</a>

            <a href="{{route('samples')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('samples') ? 'active' : '' }}">Samples</a>

            <a href="{{route('contact')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>

            {{-- <a href="{{route('blogs')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('blogs') ? 'active' : '' }}">Blogs</a> --}}

            <a href="{{route('reviews')}}" class="block text-white font-bold py-2 md:mx-2 xl:px-1 text-base hover:text-primary-one {{ request()->routeIs('reviews') ? 'active' : '' }}">Reviews</a>

            <div class="flex flex-col md:flex-row my-3 mx-3 lg:my-0 md:space-x-2 space-y-2 md:space-y-0 ">
                <a href="{{route('order')}}" class="text-center border border-[#19db33] text-[#19db33] p-2 rounded">
                    <i class=" fa fa-circle text-[#19db33] text-sm animate-pulse"></i> Order Now
                </a>
                <a href="{{route('login')}}" class="bg-primary-one text-white text-center w-full sm:w-auto py-2 px-4 text-lg font-semibold rounded leading-8 hover:bg-primary-two transition duration-500 ease-in-out">
                    <i class="fa fa-login"></i>
                    Login
                </a>
            </div>
        </nav>
    </div>
</div>
