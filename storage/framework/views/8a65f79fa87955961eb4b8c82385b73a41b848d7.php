<?php $__env->startSection('styles'); ?>
    <style>
        ::-webkit-scrollbar {
            width: 10px;
            background: white;
            border-radius: 5px
        }

        /* Track */
        ::-webkit-scrollbar-track {
            box-shadow: inset 0 0 5px white;
            border-radius: 100px;
        }

        /* Handle */
        ::-webkit-scrollbar-thumb {
            background: black;
            border-radius: 5px;
        }

        /* Handle on hover */
        ::-webkit-scrollbar-thumb:hover {
            background: #F68800;
        }

        .overflow-x-auto {
            max-height: 562px;
            direction: rtl;
        }
    </style>
<?php $__env->stopSection(); ?>



<?php $__env->startSection('content'); ?>
<?php echo $__env->make('partials.frontend.hero', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    </div>



    <!-------------------University Logo  ------------------------->
    <section class="overflow-hidden mt-4">
        <div class="container mx-auto">
            <div class="hidden lg:grid lg:grid-cols-6">
                <!-- Img 1 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border" src="images/Birk-Beck.png" alt="">
                </div>
                <!-- Img 2 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border" src="images/Birmingham-metropolitan.png"
                        alt="">
                </div>
                <!-- Img 3 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border" src="images/business-school-london.png"
                        alt="">
                </div>
                <!-- Img 4 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border" src="images/city-uni.png" alt="">
                </div>
                <!-- Img 5 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border" src="images/De-montfort-Uni.png"
                        alt="">
                </div>
                <!-- Img 6 -->
                <div>
                    <img class="hover:-translate-y-1 hover:scale-110 hover:border"
                        src="images/London-school-of-business.png" alt="">
                </div>

            </div>

        </div>


    </section>


    <!------------------------------------How to Order------------------------->
    
    <h3 class="font-bold text-4xl text-center py-9 mx-2 md:mx-0"> How to Order An Assignment</h2>
        <div class="relative">
            <div class="hidden lg:block">

                <img src="<?php echo e(asset('images/Group.webp')); ?>" class="lg:w-[90%] mx-auto" alt="">
            </div>
            <div class="hidden lg:grid lg:ml-[6%] grid-cols-3 x absolute lg:-mt-[32%] xl:-mt-[28%] w-full lg:w-[93%] ">
                <div class=" rounded-full   p-5">
                    <div class="p-8  rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-[21rem] h-[21rem]">
                        <div class="bg-white   rounded-full w-[17rem] h-[17rem]">
                            <img class="pt-10 w-14 mx-auto" src="images/Group 4orderprocess.png" alt="Cheap Cv">
                            <p class=" mx-auto font-bold text-center">1. Order Process</p>
                            <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Lorem ipsum dolor sit amet
                                consectetur, adipisicing elit. Fuga voluptatum fugiat dolorem possimus unde sint!
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" rounded-full  p-5">
                    <div class="p-8  rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-[21rem] h-[21rem]">
                        <div class="bg-white   rounded-full w-[17rem] h-[17rem]">
                            <img class="pt-10 w-14 mx-auto" src="images/Groupcontact.png" alt="Cheap Cv">
                            <p class=" mx-auto font-bold text-center">We Will Contact You</p>
                            <p class="font-semibold text-gray-600 text-sm text-center mx-4 ">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Nobis, omnis!
                            </p>
                        </div>
                    </div>
                </div>

                <div class=" rounded-full  p-5">
                    <div class="p-8  rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-[21rem] h-[21rem]">
                        <div class="bg-white   rounded-full w-[17rem] h-[17rem]">
                            <img class="pt-10 w-14 mx-auto" src="images/Groupproductdelivery.png" alt="Cheap Cv">
                            <p class=" mx-auto font-bold text-center">Product Delivery</p>
                            <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Lorem ipsum dolor sit amet
                                consectetur adipisicing elit. Nobis odit distinctio repudiandae tenetur sit eos.
                            </p>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>

        <!-- Mobile  -->
        <div class="lg:hidden grid gird-cols-1 place-items-center gap-y-20 relative">


            <div class="outline-dashed outline-orange-500 rounded-full w-74 h-74 p-5">
                <div class="p-4 rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-64 h-64">
                    <div class="bg-white  rounded-full w-56 h-56">
                        <img class="pt-10 w-14 mx-auto" src="images/Group 4orderprocess.png" alt="Cheap Cv">
                        <p class=" mx-auto font-bold text-center">Order Process</p>
                        <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Lorem ipsum dolor sit amet
                            consectetur, adipisicing elit. Fuga voluptatum fugiat dolorem possimus unde sint!
                        </p>
                    </div>
                </div>
            </div>

            <div class="outline-dashed outline-orange-500 rounded-full w-74 h-74 p-5">
                <div class="p-4 rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-64 h-64">
                    <div class="bg-white  rounded-full w-56 h-56">
                        <img class="pt-10 w-14 mx-auto" src="images/Groupcontact.png" alt="Cheap Cv">
                        <p class=" mx-auto font-bold text-center">We Will Contact You</p>
                        <p class="font-semibold text-gray-600 text-sm text-center mx-4 ">Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Nobis, omnis!
                        </p>
                    </div>
                </div>
            </div>

            <div class="outline-dashed outline-orange-500 rounded-full w-74 h-74 p-5">
                <div class="p-4 rounded-full bg-gradient-to-r from-[#FCA311] to-[#F68800] w-64 h-64">
                    <div class="bg-white  rounded-full w-56 h-56">
                        <img class="pt-10 w-14 mx-auto" src="images/Groupproductdelivery.png" alt="Cheap Cv">
                        <p class=" mx-auto font-bold text-center">Product Delivery</p>
                        <p class="font-semibold text-gray-600 text-sm text-center mx-4 "> Lorem ipsum dolor sit amet
                            consectetur adipisicing elit. Nobis odit distinctio repudiandae tenetur sit eos.
                        </p>
                    </div>
                </div>
            </div>

            <div class="absolute top-[19rem]  border-l-[3px] border-dashed h-[77.5px]  border-orange-500"></div>
            <div class="absolute top-[42rem]  border-l-[3px] border-dashed h-[77.5px]  border-orange-500"></div>
        </div>
        


        <!-- Affordable Assignment Online -->
        <section class="bg-[#EDEDED] p-10 mt-5 overflow-hidden">
            <div class="container mx-auto text-center">
                <h4 class="text-2xl font-bold ">
                    Avail Uk's <span class="text-orange-500">Best Affordable Assignment Help</span> Online
                </h4>
                <div class="md:m-24">

                    <!------------- Courses Div 1 ----------->
                    <div
                        class=" grid grid-cols-1 gap-1 mx-10 sm:gap-2 md:gap-2 lg:gap-[3rem] xl:gap-[3rem] 2xl:gap-[3rem] sm:grid-cols-2: md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 2xl:grid-cols-5 pt-10 ">
                        <div
                            class=" hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>

                    </div>
                    <!-----=------- Courses Div 2 ----------------->
                    <div
                        class="grid grid-cols-1 gap-1 mx-10 sm:gap-2 md:gap-2 lg:gap-[3rem] xl:gap-[3rem] 2xl:gap-[3rem]  sm:grid-cols-2: md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 2xl:grid-cols-5 pt-10 ">
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>

                    </div>
                    <!----------------- Courses Div 3 -------->
                    <div
                        class="grid grid-cols-1 gap-1 mx-10 sm:gap-2 md:gap-2 lg:gap-[3rem] xl:gap-[3rem] 2xl:gap-[3rem]  sm:grid-cols-2: md:grid-cols-2 lg:grid-cols-5 xl:grid-cols-5 2xl:grid-cols-5 pt-10 ">
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>
                        <div
                            class="hover:-translate-y-1 hover:scale-100 cursor-pointer bg-white shadow-black shadow-2xl rounded-3xl p-1 ">
                            <img src="images/Groupbook-icon.png" class="-mt-6 h-8" alt="book-icon">
                            <h4 class="text-xl">English</h4>
                        </div>

                    </div>
                    <!-- Button  -->
                    <div class="mt-20">
                        <button
                            class="shadow-2xl hover:-translate-y-1 hover:scale-100 cursor-pointer bg-orange-500  text-white font-bold py-2 px-10 rounded-full">
                            <a href="#"></a> Order Now!
                        </button>
                    </div>
                </div>

            </div>


        </section>

        <!-- Blank White Div -->
        <div class="h-24 bg-white overflow-hidden">
        </div>

        <!------- Pricing Section--------->
        <section class="bg-[#EDEDED] p-5 mt-5 overflow-hidden">
            <div class="">
                <div class="grid lg:grid-cols-3 px-6 md:px-12 xl:px-32">

                    <!------------------ Box 1 ------------------>
                    <div class="p-0 py-12 ">
                        <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tr-none lg:rounded-br-none">
                            <div class="p-6  text-center">
                                <h4 class="uppercase mb-4 text-xl">
                                    <strong>2:1</strong>
                                </h4>
                                <h4 class="text-2xl text-center">
                                    50%-60%<br>
                                    <small class="text-gray-500 text-sm ">For 100 words</small>
                                </h4>
                                <!-- <small class="text-gray-500 text-sm ">For 100 words</small> -->
                                <h4 class="text-xl font-medium text-orange-500 text-center">
                                    <br>
                                    £ 8.90
                                </h4>
                                <h4 class="text-xl font-light  text-orange-500 text-center">
                                    <br>
                                    Free
                                </h4>
                            </div>
                            <div class="p-6 flex">
                                <ol class="list-inside mx-auto ">
                                    <li class="mb-4  ">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4 lex items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">

                                        <button
                                            class="border border-orange-500  bg-transparent hover:bg-orange-500 text-orange-500 hover:text-white font-light py-2 px-10 rounded-full">
                                            <a href="#"></a> Order Now!
                                        </button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>

                    <!-------------------Box 2--------------------->
                    <div class="p-0">
                        <div class=" block shadow-2xl rounded-lg  bg-white h-full z-10">

                            <div class="p-6 bg-orange-500 rounded text-center">
                                <h4 class="text-white uppercase mb-4 text-xl">
                                    <strong>Transparent Price</strong>
                                </h4>
                            </div>
                            <h4 class="text-2xl mb-6 text-center">
                                <strong>A</strong>
                                <!-- <small class="text-gray-500 text-sm">60-70%</small> -->
                            </h4>
                            <h4 class="text-2xl text-center">
                                60%-70%<br>
                                <small class="text-gray-500 text-sm ">For 100 words</small>
                            </h4>
                            <!-- <small class="text-gray-500 text-sm ">For 100 words</small> -->
                            <h4 class="text-xl font-medium text-orange-500 text-center">
                                <br>
                                £ 9.90
                            </h4>
                            <h4 class="text-xl font-light  text-orange-500 text-center">
                                <br>
                                Free
                            </h4>
                            <div class="p-6 flex">
                                <ol class="list-inside mx-auto ">
                                    <li class="mb-4  ">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4 lex items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">

                                        <button
                                            class="border border-orange-500  bg-transparent hover:bg-orange-500 text-orange-500 hover:text-white font-light py-2 px-10 rounded-full">
                                            <a href="#"></a> Order Now!
                                        </button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                    <!-------------------Box 3------------------- -->
                    <div class="p-0 py-12">
                        <div class="block rounded-lg shadow-lg bg-white h-full lg:rounded-tl-none lg:rounded-bl-none">
                            <div class="p-6  text-center">
                                <h4 class="uppercase mb-4 text-xl">
                                    <strong>Distinction</strong>
                                </h4>
                                <h4 class="text-2xl text-center">
                                    75%-80%<br>
                                    <small class="text-gray-500 text-sm ">For 100 words</small>
                                </h4>
                                <!-- <small class="text-gray-500 text-sm ">For 100 words</small> -->
                                <h4 class="text-xl font-medium text-orange-500 text-center">
                                    <br>
                                    £ 10.90
                                </h4>
                                <h4 class="text-xl font-light  text-orange-500 text-center">
                                    <br>
                                    Free
                                </h4>
                            </div>
                            <div class="p-6 flex">
                                <ol class="list-inside mx-auto ">
                                    <li class="mb-4  ">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4 lex items-center">
                                        <p class="text-sm">Table of Content <span class="line-cut">(£18.31)</span></p>
                                    </li>
                                    <li class="mb-4  items-center">

                                        <button
                                            class="border border-orange-500  bg-transparent hover:bg-orange-500 text-orange-500 hover:text-white font-light py-2 px-10 rounded-full">
                                            <a href="#"></a> Order Now!
                                        </button>
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
        </section>

        <!--------Free Features------------>
        <section class="p-7 py-20 bg-white overflow-hidden">
            <div class="container mx-auto">
                <h4 class="text-2xl font-bold text-center mb-6">
                    Free Features
                </h4>
                <!--------------Circles Grid Div ------------------>
                <div
                    class="grid justify-items-center gap-1 sm:gap-1 md:gap-2 lg:gap-6 xl:gap-6 2xl:gap-6 grid-cols-1 sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-6 xl:grid-cols-6 2xl:grid-cols-6">

                    <!----- Grid 1------->
                    <div class="flex sm:space-x-4 ">
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="rounded-full invisible lg:visible bg-black w-4 h-4 mt-20"></div>
                    </div>
                    <!-- Grid 2 -->
                    <div class="flex sm:space-x-4">
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                    </div>
                    <!-- Grid 3 -->
                    <div class="flex sm:space-x-4 ">
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                    </div>
                    <!-- Grid 4 -->
                    <div class="flex sm:space-x-4">
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                    </div>
                    <!-- Grid 5 -->
                    <div class="flex sm:space-x-4">
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                    </div>
                    <!-- Grid 6 -->
                    <div class="flex sm:space-x-4">
                        <div class="hover:scale-105 outline-dashed outline-orange-500  rounded-full w-40 h-40">
                            <div class="p-8 text-center">
                                <p class="text-base">Table Of Content</p>
                                <p class="text-base">for <span class="line-cut">£18.31</span></p>
                                <p> Free</p>
                            </div>
                        </div>
                        <div class="animate-spin rounded-full hidden lg:grid bg-black w-4 h-4 mt-20"></div>
                    </div>
                </div>
                <h4 class="text-2xl font-bold text-center mb-6 mt-5">
                    Get All the Features <span class="line-cut">£79.81</span> Free
                </h4>
                <div class="mt-10 text-center">
                    <button
                        class="hover:-translate-y-1 hover:scale-100 shadow-2xl bg-orange-500 text-white font-bold py-2 px-10 rounded-full">
                        <a href="#"></a> Order Now!
                    </button>
                </div>
            </div>
        </section>


        <!-- Girl Background -->
        <section class="py-7 bg-gradient-to-br from-[#FCA00F] to-orange-200  h-fit pb-5 overflow-hidden">
            <div class="container mx-auto">
                <div class="p-8 grid grid-cols-1 sm:grid-cols-1 md:grid-cols-1 lg:grid-cols-3">
                    <!-- Column 1 for mobile -->
                    <div class="lg:hidden rounded p-5 h-fit  bg-[#FDC875] mt-4">
                        <div class="flex">
                            <div class="h-8 w-8 bg-transparent border border-black rounded-full p-4"></div>
                            <div class="ml-3">
                                <h4 class="text-lg text-white font-semibold">Reliable Essay Writing Website of UK-
                                    Easy
                                    To
                                    Find,</h4>
                                <h4 class="text-black text-lg font-semibold">Authentic To Rely</h4>
                                <p class="text-sm text-white">Finding essay experts in London is like searching for
                                    the
                                    sea
                                    shell- only lucky people can get the real one. To make life of a student stress
                                    free, we
                                    have launched an authentic platform where students can get in loop with
                                    experienced
                                    essay writers. Get an online access on Essay Mills and take an expert’s advice,
                                    before
                                    you write. We provide authentically genuine services that make customers 100%
                                    satisfied.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Column 2 for mobile  -->
                    <div class="lg:hidden rounded p-5 h-fit  bg-[#FDC875] mt-4 ">
                        <div class="flex">
                            <div class="h-8 w-8 bg-transparent border border-black rounded-full p-4"></div>
                            <div class="ml-3">
                                <h4 class="text-lg text-white font-semibold">Write ‘Professional Essay Writing
                                    Service Near Me
                                </h4>
                                <h4 class="text-black text-lg font-semibold">And Find Essay Mills On Top</h4>
                                <p class="text-sm text-white">Essay Mills, being a top-notch essay writing company
                                    is known for providing best writing help to students. But, another factor that
                                    make our company exceptional among our competitors is that our services are
                                    worldwide available all around the world. No matter whether you are in England,
                                    Canada, or anywhere in this globe. Our professionals are right here to serve
                                    you!
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- Column 3 for Mobile -->
                    <div class="lg:hidden rounded p-5 h-fit  bg-[#FDC875] mt-4">
                        <div class="flex">
                            <div class="h-8 w-8 bg-transparent border border-black rounded-full p-4"></div>
                            <div class="ml-3">
                                <h4 class="text-lg text-white font-semibold">Our Essay Writing Services Can Help You
                                    Catch
                                </h4>
                                <h4 class="text-black text-lg font-semibold">Your Last-Minute Submission!</h4>
                                <p class="text-sm text-white">Crossing deadline is the biggest nightmare for many
                                    students but complexity of task eventually makes on-time submission quite
                                    challenging. If you can relate with the situation then we are here to offer
                                    instant help. Services of Essay Mills are 24.7 available, no matter at what time
                                    you need us. Just don’t let that hopeless thought impact on your grades, we are
                                    just a call away from you.
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-------------- Column 1 for large screens ----------->

                    <div class="hidden sm:hidden md:hidden lg:grid overflow-x-auto rounded-3xl w-[90%] col-span-2 bg-[#FDC875] border ml-9 border-[#f0a834]"
                        style=" ">
                        <div class="hidden sm:hidden md:hidden lg:grid rounded-3xl   m-20 " style="direction: ltr;">
                            <!-- 1st -->
                            <div class="flex">
                                <div class="h-8 w-8 animate-spin border-2 bg-transparent  border-black rounded-full p-4">
                                </div>
                                <div class="ml-2 cursor-pointer">
                                    <h4 class="text-lg text-white font-semibold">Reliable Essay Writing Website of UK-
                                        Easy
                                        To
                                        Find,</h4>
                                    <h4 class="text-black text-lg font-semibold">Authentic To Rely</h4>
                                    <p class="text-sm text-white">Finding essay experts in London is like searching for
                                        the
                                        sea
                                        shell- only lucky people can get the real one. To make life of a student stress
                                        free, we
                                        have launched an authentic platform where students can get in loop with
                                        experienced
                                        essay writers. Get an online access on Essay Mills and take an expert’s advice,
                                        before
                                        you write. We provide authentically genuine services that make customers 100%
                                        satisfied.
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="h-8 w-8 animate-spin border-2 bg-transparent  border-black rounded-full p-4">
                                </div>
                                <div class="ml-2 cursor-pointer">
                                    <h4 class="text-lg text-white font-semibold">Reliable Essay Writing Website of UK-
                                        Easy
                                        To
                                        Find,</h4>
                                    <h4 class="text-black text-lg font-semibold">Authentic To Rely</h4>
                                    <p class="text-sm text-white">Finding essay experts in London is like searching for
                                        the
                                        sea
                                        shell- only lucky people can get the real one. To make life of a student stress
                                        free, we
                                        have launched an authentic platform where students can get in loop with
                                        experienced
                                        essay writers. Get an online access on Essay Mills and take an expert’s advice,
                                        before
                                        you write. We provide authentically genuine services that make customers 100%
                                        satisfied.
                                    </p>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="h-8 w-8 animate-spin border-2 bg-transparent  border-black rounded-full p-4">
                                </div>
                                <div class="ml-2 cursor-pointer">
                                    <h4 class="text-lg text-white font-semibold">Reliable Essay Writing Website of UK-
                                        Easy
                                        To
                                        Find,</h4>
                                    <h4 class="text-black text-lg font-semibold">Authentic To Rely</h4>
                                    <p class="text-sm text-white">Finding essay experts in London is like searching for
                                        the
                                        sea
                                        shell- only lucky people can get the real one. To make life of a student stress
                                        free, we
                                        have launched an authentic platform where students can get in loop with
                                        experienced
                                        essay writers. Get an online access on Essay Mills and take an expert’s advice,
                                        before
                                        you write. We provide authentically genuine services that make customers 100%
                                        satisfied.
                                    </p>
                                </div>
                            </div>
                            <!-- 2nd -->
                            <div class="flex">
                                <div class="h-8 w-8 animate-spin border-2 bg-transparent  border-black rounded-full p-4">
                                </div>
                                <div class="ml-2 cursor-pointer">
                                    <h4 class="text-lg text-white font-semibold">Write ‘Professional Essay Writing
                                        Service Near Me
                                    </h4>
                                    <h4 class="text-black text-lg font-semibold">And Find Essay Mills On Top</h4>
                                    <p class="text-sm text-white">Essay Mills, being a top-notch essay writing company
                                        is known for providing best writing help to students. But, another factor that
                                        make our company exceptional among our competitors is that our services are
                                        worldwide available all around the world. No matter whether you are in England,
                                        Canada, or anywhere in this globe. Our professionals are right here to serve
                                        you!
                                    </p>
                                </div>
                            </div>
                            <!-- 3rd -->
                            <div class="flex ">
                                <div class="h-8 w-8 animate-spin border-2 bg-transparent  border-black rounded-full p-4">
                                </div>
                                <div class="ml-2 cursor-pointer">
                                    <h4 class="text-lg text-white font-semibold">Our Essay Writing Services Can Help You
                                        Catch
                                    </h4>
                                    <h4 class="text-black text-lg font-semibold">Your Last-Minute Submission!</h4>
                                    <p class="text-sm text-white">Crossing deadline is the biggest nightmare for many
                                        students but complexity of task eventually makes on-time submission quite
                                        challenging. If you can relate with the situation then we are here to offer
                                        instant help. Services of Essay Mills are 24.7 available, no matter at what time
                                        you need us. Just don’t let that hopeless thought impact on your grades, we are
                                        just a call away from you.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column 2 for Large Screens-->
                    <div class="hover:scale-105 hidden sm:hidden md:hidden lg:grid ">
                        <img src="images/student-education1.webp" class="h-[110%]" alt="">
                    </div>

                </div>
            </div>
        </section>

        <!------- Testimonials Section ------>
        <section class="bg-white overflow-hidden py-8 ">
            <div class="container  mx-auto p-8 my-5">
                <div class="my-12">

                    <h4 class="text-2xl  font-extrabold my-4">
                        Here’s what people have to say about our essays
                    </h4>
                    <p class="w-[45%] font-bold text-[#656262]">
                        From Bristol to Birmingham and beyond, we have helped hundreds of students pass their courses with
                        our
                        essay writing support. Their testimonials show their satisfaction with our quality services.
                    </p>
                </div>



                <div
                    class="grid grid-cols-1 gap-2 lg:gap-3 sm:grid-cols-1 md:grid-cols-1  lg:grid-cols-3 mt-8 lg:space-x-4 space-y-2">
                    <!-- Column 1 for testimonial -->
                    <div class="grid-cols-1 mt-2 ">
                        <div class="outline outline-[#F78C03] rounded-3xl p-5 bg-white">
                            <div class="container py-5">
                                <!-- This Grid is for text -->
                                <div class="grid grid-cols-6">
                                    <div class="col-start-1 col-end-3 ...">
                                        <p class="text-2xl font-semibold">
                                            Testimonials
                                        </p>
                                    </div>
                                    <div class="col-end-7 col-span-2 ...">

                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Boxes -->
                            <div class="grid grid-cols-1">
                                <swiper-container class="mySwiper" pagination="true">
                                    <!-- Slide 1 -->
                                    <swiper-slide>
                                        <!-- Card 1 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                    <!-- Slide 2 -->
                                    <swiper-slide>
                                        <!-- Card 1 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Card 2 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                        <!-- Card 3 -->
                                        <div class="flex space-x-2">
                                            <!-- Image Icon -->
                                            <div class="bg-black rounded-full w-12 h-12">
                                                <div><i class="fa-solid fa-circle-user text-[42px]"
                                                        style="color:#D9D9D9;"></i>
                                                </div>
                                            </div>
                                            <!-- Name  -->
                                            <div class="">
                                                <h6 class="text-base text-[#6D6C6C] font-semibold">
                                                    Kane George ---
                                                    <span class="text-base text-[#FCA00F] font-semibold">
                                                        Paris
                                                    </span>
                                                </h6>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    4 months ago
                                                </p>
                                                <p class="text-sm text-[#6D6C6C] font-medium">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                                    Nesciunt rem,
                                                    dolores saepe voluptas dolorum dicta?
                                                </p>
                                            </div>
                                        </div>
                                    </swiper-slide>
                                </swiper-container>
                            </div>
                            <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-element-bundle.min.js"></script>
                        </div>

                    </div>

                    <!-- Column 2 for accomplishment -->
                    <div class=" col-span-2 pb-8">
                        <div class="outline outline-[#F78C03] rounded-3xl p-5 bg-white">
                            <div class="container">
                                <h4 class="text-2xl font-semibold">
                                    Our Accomplishments Today
                                </h4>
                                <!-- Grid  Boxes -->
                                <div class="grid grid-cols-1 lg:grid-cols-4  justify-evenly mt-2 lg:space-x-4">
                                    <!-- 1st Column -->
                                    <div class="outline outline-[#D9D9D9] rounded-lg p-1 space-y-4">
                                        <h6 class="text-base text-[#6D6C6C] font-semibold">
                                            Essays in Progress
                                        </h6>
                                        <p class="text-base text-black">
                                            2456
                                        </p>
                                        <div class="relative pt-1 mx-5">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-[#D9D9D9]">
                                                <div style="width: 10%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- 2nd COlumn -->
                                    <div class="outline outline-[#D9D9D9] rounded-lg p-1 space-y-4">
                                        <h6 class="text-base text-[#6D6C6C] font-semibold">
                                            Essays Delivered
                                        </h6>
                                        <!-- This Grid is for text -->
                                        <div class="grid grid-cols-6">
                                            <div class="col-start-1 col-end-3 ...">
                                                <p class="text-base text-black">
                                                    512
                                                </p>
                                            </div>
                                            <div class="col-end-7 col-span-2 ...">
                                                <p class="text-base text-[#6D6C6C]">
                                                    Today
                                                </p>
                                            </div>
                                        </div>
                                        <!-- bar -->
                                        <div class="relative pt-1 mx-5">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-[#D9D9D9]">
                                                <div style="width: 10%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- 3rd Column -->
                                    <div class="outline outline-[#D9D9D9] rounded-lg p-1 space-y-4">
                                        <h6 class="text-base text-[#6D6C6C] font-semibold">
                                            Online Operation
                                        </h6>
                                        <!-- This Grid is for text -->
                                        <div class="grid grid-cols-6">
                                            <div class="col-start-1 col-end-3 ...">
                                                <p class="text-base text-black">
                                                    17
                                                </p>
                                            </div>
                                            <div class="col-end-7 col-span-2 ...">
                                                <p class="text-base text-[#6D6C6C]">
                                                    20+
                                                </p>
                                            </div>

                                        </div>
                                        <!-- bar -->
                                        <div class="relative pt-1 mx-5">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded-3xl bg-[#D9D9D9]">
                                                <div style="width: 10%"
                                                    class=" rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                    <!-- 4th Column -->
                                    <div class="outline outline-[#D9D9D9] rounded-lg p-1 space-y-4">
                                        <h6 class="text-base text-[#6D6C6C] font-semibold">
                                            Active Writers
                                        </h6>

                                        <!-- This Grid is for text -->
                                        <div class="grid grid-cols-6">
                                            <div class="col-start-1 col-end-3 ...">
                                                <p class="text-base text-black">
                                                    1256
                                                </p>
                                            </div>
                                            <div class="col-end-7 col-span-2 ...">
                                                <p class="text-base text-[#6D6C6C]">
                                                    1500+
                                                </p>
                                            </div>

                                        </div>

                                        <div class="relative pt-1 mx-5">
                                            <div class="overflow-hidden h-2 mb-4 text-xs flex rounded bg-[#D9D9D9]">
                                                <div style="width: 10%"
                                                    class=" rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>
                                                <div style="width: 15%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#F78C03]">
                                                </div>
                                                <div style="width: 20%"
                                                    class="rounded shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#FDC875]">
                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Our Happy Customer -->
                                <div class="grid grid-cols-2 gap-1 mt-4">
                                    <div class="flex">
                                        <div class="m-5">
                                            <div class="rounded-lg p-4 py-5 bg-[#FDC875] absolute overflow-hidden">
                                                <h6 class="font-extrabold text-white text-sm ">
                                                    Our Happy Bar
                                                </h6>
                                                <div class="progress">
                                                    <div class="barOverflow">
                                                        <div class="bar"></div>
                                                    </div>
                                                    <span class="text-white">56.5%</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="ml-32">
                                            <h6 class="font-semibold text-black text-sm lg:text-xl">
                                                Assignment help expert
                                                Is Rated Great
                                            </h6>
                                            <p class="font-medium text-[#6D6C6C] text-sm lg:text-xl">Based on 88 reviews
                                            </p>
                                            <!--  Stars -->
                                            <div class="flex ">
                                                <img src="images/Group 40star.png" alt="star-orange"
                                                    class="w-[20px] h-[20px] lg:w-[28px] lg:h-[28px] animate-spin">
                                                <img src="images/Group 40star.png" alt="star-orange"
                                                    class="w-[20px] h-[20px] lg:w-[28px] lg:h-[28px] animate-spin">
                                                <img src="images/Group 40star.png" alt="star-orange "
                                                    class="w-[20px] h-[20px] lg:w-[28px] lg:h-[28px] animate-spin">
                                                <img src="images/Group 40star.png" alt="star-orange"
                                                    class="w-[20px] h-[20px] lg:w-[28px] lg:h-[28px] animate-spin">
                                                <!-- <img src="images/Group 41greystar.png" alt="star-orange" class="w-[20px] h-[20px] lg:w-[28px] lg:h-[28px]"> -->
                                            </div>
                                            <div class="flex">
                                                <span class="text-2xl font-bold">
                                                    ⭐Trust Pilot
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="hidden lg:grid">
                                        <img src="images/image 1happybar.png" alt="">
                                    </div>




                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <hr>
        <!-------- Faq's Section ------------->
        <section class="bg-white overflow-hidden pb-8 p-3">
            <div class="container mx-auto">
                <h5 class="text-center text-2xl text-black font-semibold">
                    FAQs
                </h5>
                <div>
                    <div class="grid divide-y divide-neutral-200  w-[60%] mx-auto mt-8 space-y-5">
                        <!-- First -->
                        <div class="py-5 p-5 rounded-full outline outline-orange-500">

                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="text-[#FAAC08] font-extrabold text-xl"> What is a SAAS platform?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>

                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    SAAS platform is a cloud-based software service that allows users to access
                                    and use a variety of tools and functionality.
                                </p>

                            </details>
                        </div>
                        <!-- Second -->
                        <div class="py-5 p-5 rounded-full outline outline-orange-500">

                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="text-[#FAAC08] font-extrabold text-xl"> Q1. Which is the best assignment help
                                        website in UK?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>

                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    Assignmenthelpexpert.co.uk is the best assignment help website in the UK. We provide
                                    high-quality, plagiarism-free
                                    assignments to students at all levels of education. Our team of expert writers has
                                    extensive experience in writing
                                    assignments in a wide range of subjects, so we can help you with any task you need
                                    assistance with. Contact us
                                    today to get started!
                                </p>

                            </details>
                        </div>
                        <!-- Third -->
                        <div class="py-5 p-5 rounded-full outline outline-orange-500">

                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="text-[#FAAC08] font-extrabold text-xl"> What is a SAAS platform?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>

                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    SAAS platform is a cloud-based software service that allows users to access
                                    and use a variety of tools and functionality.
                                </p>

                            </details>
                        </div>
                        <!-- Fourth -->
                        <div class="py-5 p-5 rounded-full outline outline-orange-500">

                            <details class="group">
                                <summary class="flex justify-between items-center font-medium cursor-pointer list-none">
                                    <span class="text-[#FAAC08] font-extrabold text-xl" > What is a SAAS platform?</span>
                                    <span class="transition group-open:rotate-180">
                                        <svg fill="none" height="24" shape-rendering="geometricPrecision"
                                            stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="1.5" viewBox="0 0 24 24" width="24">
                                            <path d="M6 9l6 6 6-6"></path>
                                        </svg>
                                    </span>
                                </summary>

                                <p class="text-neutral-600 mt-3 group-open:animate-fadeIn">
                                    SAAS platform is a cloud-based software service that allows users to access
                                    and use a variety of tools and functionality.
                                </p>

                            </details>
                        </div>
                    </div>

                </div>
        </section>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.web', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Syed Faraz Shahid\blog\resources\views/pages/home.blade.php ENDPATH**/ ?>