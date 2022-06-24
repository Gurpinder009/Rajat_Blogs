@extends('Layout')
@section('working')
    <div class="flex items-center min-h-screen border border-red-400">

    <div class="flex self-center justify-center border  w-full flex-wrap flex-shrink-0">
        <div class="min-h-full  w-full sm:w-120 flex justify-center items-center bg-white drop-shadow-md ">

                <img class="h-96 w-96" src="https://bloggerspassion.com/wp-content/uploads/2019/10/best-indian-blogs-to-read-and-follow.png" alt=""/>
                    </div>
        
         <form class="pt-24 pb-32 px-12 rounded  w-full sm:w-auto bg-white relative box-border shadow-md" method="POST"
            action="/user/sign-in">
            @csrf
            <h1 class="text-4xl font-semibold text-slate-700 mb-10">LOGIN</h1>
            <div class="grid gap-7 auto-rows-4em">

                <div>
                    <input type="email" placeholder="Email Address"
                        class="h-full  bg-gray-200 outline-none px-3 w-full sm:w-96 " name="email" />
                    @error('email')
                        <small class="block w-100 text-red-500">{{ $message }}</small>
                    @enderror
                </div>





                <div>
                    <div class="relative overflow-hidden h-full flex items-center p-0">
                        <input type="password" placeholder="Password" class="h-full w-full bg-gray-200 outline-none px-3"
                            name="password" />
                        <small class="absolute right-4 text-xl  text-slate-500"><i class="fa-solid fa-eye"></i></small>
                    </div>
                    @error('password')
                        <small class="block w-100 text-red-500">{{ $message }}</small>
                    @enderror
                </div>


                <button
                    class="border shadow-md transition-all duration-700 border-slate-700 w-full  rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700"
                    type="submit">Submit</button>


                <span class="absolute block right-0  w-full bottom-7 text-center">Not a member? <a href="/user/create"
                        class="underline">sign up now</a></span>

            </div>
        </form>
    </div>
    </div>
@endsection
