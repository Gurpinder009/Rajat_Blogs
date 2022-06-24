@extends('Layout')
@section('working')
    <div class="flex min-h-screen relative justify-center items-center p-2">
        {{-- @error('email')
            <div id="alert" class="w-full px-2 absolute top-2 ">
                <div class="flex justify-between items-center border border-red-600 rounded p-4 bg-red-200  ">
                    <span>{{ $message }}</span>
                    <i onclick="closeAlert('alert')" class="cursor-pointer fa-solid fa-xmark"></i>

                </div>
            </div>
        @enderror --}}



        <form class="pt-24 pb-32 px-12 rounded shadow-lg w-full sm:w-auto bg-white relative box-border" method="POST"
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
@endsection
