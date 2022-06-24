@extends('Layout')
@section('working')
    <div class="min-h-screen border border-green-800">
        <div class="grid mx-auto grid-cols-1 md:grid-cols-2 container my-10 bg-white border shadow-sm ">
            <div class="h-120  py-16  px-16 flex justify-center items-center">
                <span>
                    <h1 class="text-4xl mb-4 font-semibold text-gray-600">Welcome to <span class="text-purple-700">Rs
                            blogs<span></h1>
                    <p class="break-all mb-3 text-gray-500">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Optio
                        cupiditate sit sapiente nobis odio numquam laboriosam qui esse, accusantium natus, ducimus,
                        architecto aspernatur dolor itaque obcaecati magni eum consectetur dicta?</p>
                    <button
                        class="border mt-1 py-2 px-6 transition-all duration-700 border-slate-700   rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Explore
                        Blogs <i class="ml-1 fa-solid fa-arrow-right"> </i></button>
                </span>
            </div>
            <div class="h-120 py-1 overflow-hidden hidden md:block">
                <img src="https://image.shutterstock.com/image-photo/blog-notes-about-blogconcept-260nw-720876373.jpg"
                    class="w-full md:translate-x-6 md:translate-y-3 h-120 md:scale-y-105 md:-skew-x-6   ">
            </div>
        </div>



        <h1 class="text-4xl font-bold text-gray-600 text-center mt-16 mb-12">New and Popular blogs </h1>
        
        
        
        <div class="container flex flex-wrap justify-center md:justify-between mx-auto mb-12">
            
    <div class="max-w-sm rounded overflow-hidden shadow-md bg-white px-6 py-6 mb-6 mx-2">
                <div class="indent-3 pb-2 text-gray-700 text-sm font-thin">Sun Dec 19 2021</div>

                <div class="pb-6">
                    <div class="font-bold text-xl mb-2">[Updated 2022] Best Laptops To Buy in 2022 - Laptop Buying
                        Guide between
                        40-70k INR</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                        perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <a
                    href= "\blogs\1"
                    class=" border inline-block mt-1 py-2 px-6 transition-all duration-700 border-slate-700   rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Read
                    more <i class="ml-1 fa-solid fa-arrow-right"> </i></a>
            </div>

            <div class="max-w-sm rounded overflow-hidden shadow-md bg-white px-6 py-6 mb-6 mx-2">
                <div class="indent-3 pb-2 text-gray-700 text-sm font-thin">Sun Dec 19 2021</div>

                <div class="pb-6">
                    <div class="font-bold text-xl mb-2">[Updated 2022] Best Laptops To Buy in 2022 - Laptop Buying
                        Guide between
                        40-70k INR</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                        perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <a
                    href= "\blogs\1"
                    class=" border inline-block mt-1 py-2 px-6 transition-all duration-700 border-slate-700   rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Read
                    more <i class="ml-1 fa-solid fa-arrow-right"> </i></a>
            </div>


            <div class="max-w-sm rounded overflow-hidden shadow-md bg-white px-6 py-6 mb-6 mx-2">
                <div class="indent-3 pb-2 text-gray-700 text-sm font-thin">Sun Dec 19 2021</div>

                <div class="pb-6">
                    <div class="font-bold text-xl mb-2">[Updated 2022] Best Laptops To Buy in 2022 - Laptop Buying
                        Guide between
                        40-70k INR</div>
                    <p class="text-gray-700 text-base">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatibus quia, nulla! Maiores et
                        perferendis eaque, exercitationem praesentium nihil.
                    </p>
                </div>
                <a
                    href= "\blogs\1"
                    class=" border inline-block mt-1 py-2 px-6 transition-all duration-700 border-slate-700   rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Read
                    more <i class="ml-1 fa-solid fa-arrow-right"> </i></a>
            </div>


        </div>
    </div>
@endsection
