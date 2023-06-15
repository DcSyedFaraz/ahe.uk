





<section class="bg-primary-one overflow-hidden p-10">
<div class="container mx-auto">

    <nav class="border-gray-200 px-2 mb-10">
        <div class=" flex items-center justify-between">
            <a href="{{ route('home') }}" class="flex">
                <img src="images/logo.png" alt="">
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
						class="md:hidden text-gray-400 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-blue-300 rounded-lg inline-flex items-center justify-center"
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

            <div class="hidden md:flex justify-between items-center w-full md:w-auto md:order-1" id="mobile-menu-3">
                <ul class="flex-col md:flex-row flex md:space-x-8 mt-4 md:mt-0 md:text-sm md:font-medium">
                    <li class="lg:flex">
                        <img class="hidden lg:flex animate-bounce" src="images/nav iconelectric.png" alt="">
                        <a href="{{ route('blog') }}" class="ext-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0">Blog</a>



                    </li>

                    <li class="lg:flex">
                        <img class="hidden lg:flex animate-bounce h-[43px] w-[47px]" src="images/Group44.png" alt="">
                        <a href="{{ route('about') }}"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            <span class=" inline-flex whitespace-nowrap">
                                About Us

                            </span>
                        </a>


                    </li>
                    {{-- @dd($services); --}}

                    <li class="lg:flex">
                        <div>
                            <img class="hidden lg:flex animate-bounce" src="images/nav icon 2percent.png"
                                alt="">
                        </div>
                        <div @click.away="open = false" class="relative whitespace-nowrap inline-flex" x-data="{ open: false }">
                            <a @click="open = !open" class="block w-full text-left font-semibold cursor-pointer hover:text-[#6ec1e4] {{ request()->routeIs('service.show') ? '  text-primary-one' : '' }}">
                                <span class="  text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 md:hover:text-white md:p-0">
                                    <span class="text-">

                                        Services
                                    </span>
                                    <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}"
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
                                :class="{'hidden': !open}" style="display: none;">
                                <div class="px-2 py-2 rounded-md shadow bg-white">
                                    {{-- dark-mode:bg-transparent dark-mode:hover:bg-gray-600 dark-mode:focus:bg-gray-600 dark-mode:focus:text-white dark-mode:hover:text-white dark-mode:text-gray-200 --}}
                                    @if (!empty($services))
                                        @foreach ($services as $service)
                                            <a class="block px-4 py-2 mt-2 text-sm font-semibold bg-transparent rounded-lg  md:mt-0 focus:text-gray-900 hover:bg-primary-one hover:text-white focus:bg-gray-200 focus:outline-none focus:shadow-outline"
                                        href="{{ route('service.show',$service->slug) }}">{{ $service->name }}</a>

                                        @endforeach
                                    @endif



                                </div>
                            </div>
                        </div>
                        {{-- <a href="asa"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-2 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Services </a> --}}
                    </li>
                    <li class="lg:flex">
                        <div>
                            <img class="hidden lg:flex animate-bounce" src="images/Group 44track.png" alt="">
                        </div>

                        <a href="{{ route('contact')}}"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Contact Us</a>
                    </li>
                    <li class="lg:flex">
                        <div>
                            <img class="hidden lg:flex animate-bounce" src="images/Rectanglecart.png" alt="">
                        </div>

                        <a href="{{ route('order') }}"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">Order
                            Now</a>
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
