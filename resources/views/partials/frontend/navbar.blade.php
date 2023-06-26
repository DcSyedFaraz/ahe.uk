<section class="bg-primary-one overflow-hidden p-10">
    <div class="container mx-auto">

        <nav class="border-gray-200 px-2 mb-10">
            <div class=" flex items-center justify-between">
                <a href="{{ route('home') }}" class="flex">
                    <img src="{{ asset('images/logo.png') }}" class="w-[65%]" alt="">
                </a>

                <div class="flex md:order-2">
                    <div class="relative mr-3 md:mr-0 hidden md:block">
                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">

                        </div>
                        <!-- search Box -->
                        <!-- <input type="text" id="email-adress-icon"
                        class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2"
                        placeholder="Search..."> -->
                    </div>
                    <!-------------------------- Add class md:hidden inside button to hide on main desktops---------------------->
                    <button data-collapse-toggle="mobile-menu-3" type="button"
                        class="xl:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
                        aria-controls="mobile-menu-3" aria-expanded="false">
                        <span class="sr-only">Open main menu</span>
                        <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <svg class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg>
                    </button>
                </div>

                <div class="hidden xl:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-3">
                    <ul class="flex-col xl:flex-row flex xl:space-x-8 mt-4 xl:mt-0 xl:text-sm xl:font-medium">
                        <li class="xl:flex">
                            <img class="hidden xl:flex animate-bounce" src="{{ asset('images/nav iconelectric.png') }}"
                                alt="">
                            <a href="{{ route('blog') }}"
                                class="nav-text">Blog</a>



                        </li>
                        <li class="xl:flex">
                            <img class="hidden xl:flex animate-bounce h-[43px] w-[47px]"
                                src="{{ asset('images/Group44.png') }}" alt="">
                            <a href="{{ route('about') }}"
                                class="nav-text"
                                aria-current="page">
                                <span class=" inline-flex whitespace-nowrap">
                                    About Us

                                </span>
                            </a>


                        </li>
                        <li class="xl:flex">
                            <div>
                                <img class="hidden xl:flex animate-bounce "
                                    src="{{ asset('images/nav icon 2percent.png') }}" alt="">
                            </div>
                            <div @click.away="open = false" class="relative whitespace-nowrap inline-flex"
                                x-data="{ open: false }">
                                <a @click="open = !open"
                                    class="block w-full text-left font-semibold cursor-pointer hover:text-[#6ec1e4] {{ request()->routeIs('service.show') ? '  text-primary-one' : '' }}">
                                    <span
                                        class="nav-text">
                                        <span class="text-">

                                            Services
                                        </span>
                                        <svg fill="currentColor" viewBox="0 0 20 20"
                                            :class="{ 'rotate-180': open, 'rotate-0': !open }"
                                            class="inline w-4 h-4 ml-1 transition-transform duration-200 transform md:-mt-1 rotate-0">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </span>
                                </a>
                                <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                    x-transition:enter-start="transform opacity-0 scale-95"
                                    x-transition:enter-end="transform opacity-100 scale-100"
                                    x-transition:leave="transition ease-in duration-75"
                                    x-transition:leave-start="transform opacity-100 scale-100"
                                    x-transition:leave-end="transform opacity-0 scale-95"
                                    class="hidden absolute right-0  mt-9 origin-top-right rounded-md shadow-lg md:w-48 z-40"
                                    :class="{ 'hidden': !open }" style="display: none;">
                                    <div class="px-2 py-2 rounded-md shadow bg-white">
                                        {{-- dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 --}}
                                        @if (!empty($services))
                                            @foreach ($services as $service)
                                                <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 focus:text-gray-900 hover:bg-primary-one hover:text-white focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                                    href="{{ route('service.show', $service->slug) }}">{{ $service->name }}</a>
                                            @endforeach
                                        @endif



                                    </div>
                                </div>
                            </div>
                            {{-- <a href="asa"
                            class="text-base font-bold xl:text-lg lg:text-md text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-2 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Services </a> --}}
                        </li>
                        <li class="xl:flex">
                            <div>
                                <img class="hidden xl:flex animate-bounce"
                                    src="{{ asset('images/Group 44track.png') }}" alt="">
                            </div>

                            <a href="{{ route('contact') }}"
                                class="nav-text"
                                aria-current="page">
                                Contact Us</a>
                        </li>
                        <li class="xl:flex">
                            <div>
                                <img class="hidden xl:flex animate-bounce"
                                    src="{{ asset('images/Rectanglecart.png') }}" alt="">
                            </div>

                            <a href="{{ route('order') }}"
                                class="nav-text"
                                aria-current="page">Order
                                Now</a>
                        </li>
                        <li class="xl:flex">
                            <div>
                                {{-- <i class="fa-thin fa-right-to-bracket" style="color: #000000;"></i> --}}
                                <img class="hidden xl:flex animate-bounce lg:w-[4.5rem] xl:w-[2.5rem]"
                                    src="{{ asset('images/user.svg') }}" alt="">
                            </div>
                            @if (Auth::user())
                            {{-- @if ({{ Auth::user()->name == admin }})

                            href="{{ route('login') }}"
                            @else

                            href="{{ route('login') }}"
                            @endif --}}
                                <a href="{{ route('login') }}"
                                    class="nav-text"
                                    aria-current="page">Welcome, {{ Auth::user()->name }}</a>
                                    @else
                                    <a href="{{ route('login') }}"
                                    class="nav-text"
                                    aria-current="page">Login/Register</a>
                                    @endif

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>



    <!-- This Script is used for mobile responsive navbar -->
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <!--  -->

</section>
