<style>
    input[type=range] {
        -webkit-appearance: none;
        margin: 20px 0;
        width: 100%;
    }

    input[type=range]:focus {
        outline: none;
    }

    input[type=range]::-webkit-slider-runnable-track {
        width: 100%;
        height: 4px;
        cursor: pointer;
        animate: 0.2s;
        background: #F68800;
        border-radius: 25px;
    }

    input[type=range]::-webkit-slider-thumb {
        height: 20px;
        width: 20px;
        border-radius: 50%;
        background: #fff;
        box-shadow: 0 0 4px 0 rgba(0, 0, 0, 1);
        cursor: pointer;
        -webkit-appearance: none;
        margin-top: -8px;
    }

    input[type=range]:focus::-webkit-slider-runnable-track {
        background: #f4c803;
    }

    .range-wrap {

        position: relative;
    }

    .range-value {
        position: absolute;
        top: -50%;
    }

    .range-value span {
        width: 30px;
        height: 24px;
        line-height: 24px;
        text-align: center;
        background: #03a9f4;
        color: #fff;
        font-size: 12px;
        display: block;
        position: absolute;
        left: 50%;
        transform: translate(-50%, 0);
        border-radius: 6px;
    }
</style>






<section class="bg-primary-one overflow-hidden p-10">

    <nav class="border-gray-200 px-2 mb-10">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
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
                        <a href="#"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Highlights
                        </a>


                    </li>

                    <li class="lg:flex">
                        <img class="hidden lg:flex animate-bounce" src="images/nav iconelectric.png" alt="">
                        <a href="{{ route('about') }}"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">About Us
                        </a>


                    </li>

                    <li class="lg:flex">
                        <div>
                            <img class="hidden lg:flex animate-bounce" src="images/nav icon 2percent.png"
                                alt="">
                        </div>

                        <a href="#"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-2 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Save
                            $50 on Assignment </a>
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



    <!-- This Script is used for mobile responsive navbar -->
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <!--  -->

</section>
