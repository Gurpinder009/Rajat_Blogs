@extends('Layout') @section('working')
<div class="md:px-5 md:py-10 bg-white">
    <div
        class="grid grid-cols-12 gap-x-7 px-8 py-16 md:w-5/6 mx-auto rounded-md"
    >
        <img
            src="https://www.seekpng.com/png/detail/847-8474751_download-empty-profile.png"
            alt="not working"
            class="md:col-span-4 col-span-full mb-4"
        />

        <div class="col-span-full md:col-span-8">
            <h1 class="font-semibold text-5xl mb-4 mt-2 text-center md:text-left text-gray-700">About Me</h1>
            <p class="text-lg text-justify">
                Hi I am Gurpinder Singh, a 22 year old Web developer and Blogger living in V.P.O. Khan-khana, Punjab, India. I am a Computer
                Science Engineer, currently working as freelancer at Upwork.
                Have a look at my GitHub Profile, skills or just connect with
                me on LinkedIn. I am always excited to do business with like
                minded people (nerds) and hard working people who seek help, lets discuss over coffee.
            </p>
            <a href="/user/create" class="border inline-block mt-5 py-2 px-6 transition-all duration-700 border-slate-700   rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Contact Me <i class="ml-1 fa-solid fa-arrow-right"> </i></a>
        </div>
    </div>
</div>
@endsection

{{-- src="https://www.seekpng.com/png/detail/847-8474751_download-empty-profile.png" --}}
