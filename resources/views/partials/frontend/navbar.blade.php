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
        background: #03a9f4;
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
        background: #03a9f4;
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






<section class="bg-cover bg-no-repeat bg-orange overflow-hidden p-10">

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

                        <a href="#"
                            class="text-base font-bold lg:text-lg text-gray-900 hover:bg-gray-50 border-b border-gray-100 md:hover:bg-transparent md:border-0 block pl-3 pr-4 py-2 md:hover:text-white md:p-0"
                            aria-current="page">
                            Track
                            Assignment</a>
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

    <!------------------------- Hero Section Start ----------------------->
    <div
        class="container mx-auto main p-4 md:p-10 pt-16 justify-items-center  grid grid-cols-1 gap-x-4 lg:grid-cols-2 ">

        <div class="pb-3 flex space-x-4 ">
            <div class=" mt-4">
                <img class="animate-pulse" src="images/dotted squaredotted.png" alt="">
            </div>

            <div class="  ">
                <h1 class="text-3xl font-medium font-inter">Online Assignment Help UK</h1>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa quos magni dignissimos
                    autem magnam nesciunt? Inventore incidunt nobis dolor nam.</p>
                <p class="font-bold">Price Starts $10 per page</p>
                <p class="text-sm">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex, rerum incidunt? Enim,
                    doloremque. Quis, doloremque.</p>
            </div>
        </div>

        <div class="w-full  md:max-w-max sm:mx-auto  rounded-lg bg-white p-6 shadow-lg">

            <form method="POST" action="{{ route('form.submit') }}">

                @if (session('success'))
                    <div class="my-4 mx-auto bg-primari-one-lite border-t-4 border-primary-one rounded-b text-sm text-teal-900 px-4 py-3 shadow-md"
                        role="alert">

                        <p class="text-center font-bold">{{ session('success') }}</p>

                    </div>
                @endif
                @csrf
                <div class="grid grid-cols-1 sm:grid-cols-6 gap-4">
                    <div class="col-span-2">
                        <h2 class="text-lg font-bold font-inter">ORDER NOW</h2>
                    </div>
                    <div class="col-span-4 bg-[#276967] rounded-lg p-2 mb-4">
                        <p class="text-sm text-white">Upto $50 off on all assignments</p>
                    </div>
                </div>

                <!-- First Name and Last Name -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput123" name="fname"
                            aria-describedby="emailHelp123" required maxlength="255" placeholder="First name">
                        <label for="emailHelp123" class="form-lebel"></label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput124" name="lname"
                            aria-describedby="emailHelp124" required maxlength="255" placeholder="Last name">
                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>
                </div>

                <!-- Subject and Deadline -->
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="text" class="form-input" id="exampleInput123" name="subject"
                            aria-describedby="emailHelp123" placeholder="Subject">
                        <label for="emailHelp123" class="form-lebel"></label>
                    </div>
                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <div class="w-full">
                            <select id="deadline" name="deadline" type="text" class="form-select">
                                <option hidden="" value="0" disabled="" selected="">Deadline
                                </option>
                                @foreach ($deadlines as $deadline)
                                    <option {{ old('$deadline') == $deadline->id ? 'selected' : '' }}
                                        value="{{ $deadline->id }}">{{ $deadline->name }}</option>
                                @endforeach
                                {{-- <option value="1">15 Days</option>
                                                                <option value="2">10 Days</option>
                                                                <option value="3">7 Days</option>                                       --}}
                            </select>
                            @error('deadline')
                                <p class="text-red-600 text-sm">{{ $message }}</p>
                            @enderror
                        </div>

                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>
                </div>

                <!-- Wordcount Slider -->
                <div class="range bg-[#F5F5F5] mb-4">
                    <label for="steps-range" class="block mb-2 text-sm font-medium text-gray-900 dark:text-black">Word
                        Count</label>

                    <div class="range-wrap">
                        <div class="range-value" id="rangeV"></div>
                        <input id="range" name="wcount" type="range" min="250" max="5000"
                            value="2000">
                    </div>
                </div>

                <!-- Country Code Number University -->
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                    <div>
                        <select id="small" name="country" class="form-select">
                            <option selected>Choose a country</option>
                            <option value="US">United States</option>
                            <option value="CA">Canada</option>
                            <option value="FR">France</option>
                            <option value="DE">Germany</option>
                        </select>
                    </div>

                    <div class="relative mb-6" data-te-input-wrapper-init>
                        <input type="number" class="form-input" id="exampleInput124" name="phone"
                            aria-describedby="emailHelp124" placeholder="Phone Number">
                        <label for="exampleInput124" class="form-lebel"></label>
                    </div>

                    <div>
                        <div class="relative mb-6" data-te-input-wrapper-init>
                            <input type="text" class="form-input" id="exampleInput124" name="university"
                                aria-describedby="emailHelp124" placeholder="University">
                            <label for="exampleInput124" class="form-lebel"></label>
                        </div>
                    </div>
                </div>

                <button type="submit"
                    class="transition ease-in-out delay-150 w-full rounded-bl-lg rounded-tr-lg bg-[#276967] px-6 py-2.5 text-xs font-medium uppercase leading-tight text-white shadow-md hover:bg-primary-700 hover:shadow-lg focus:bg-primary-700 focus:shadow-lg focus:outline-none hover:-translate-y-1 hover:scale-110 active:bg-primary-800 active:shadow-lg"
                    data-te-ripple-init data-te-ripple-color="light">
                    Sign up
                </button>
            </form>
        </div>

    </div>


    <!-- This Script is used for mobile responsive navbar -->
    <script src="https://unpkg.com/@themesberg/flowbite@1.1.1/dist/flowbite.bundle.js"></script>
    <!--  -->

</section>
