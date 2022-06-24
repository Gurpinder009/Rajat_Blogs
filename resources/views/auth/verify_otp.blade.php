@extends('Layout')
@section('working')
    <div class="flex min-h-screen relative justify-center items-center px-2 py-16">
        @error('email')
            <div id="alert" class="w-full px-2 absolute top-2 ">
                <div class="flex justify-between items-center border border-red-600 rounded p-4 bg-red-200  ">
                    <span>{{ $message }}</span>
                    <i onclick="closeAlert('alert')" class="cursor-pointer fa-solid fa-xmark"></i>

                </div>
            </div>
        @enderror



        <form class="pt-24 pb-32 px-12 w-full sm:w-auto rounded shadow-lg bg-white relative box-border" method="POST" action="/verify/otp">
            @csrf
            <h1 class="text-4xl font-semibold text-slate-700 mb-10">Verify OTP</h1>
            <div class="grid gap-7 auto-rows-4em">


                <div class="relative overflow-hidden flex items-center p-0">
                    <input type="password" placeholder="Enter the OTP" class="h-full w-full md:w-80 bg-gray-200 outline-none px-3"
                        name="otp" />
                        <small class ="absolute right-4 text-xl text-slate-500"><i class="fa-solid fa-eye"></i></small>
                </div>


                <button type="submit"
                    class="border shadow-md transition-all duration-700 border-slate-700 md:w-full  rounded text-white bg-slate-700  hover:bg-white hover:text-slate-700">Submit
                    OTP</button>


                <span class="absolute block right-0  w-full bottom-7 text-center">Not Received OTP? <a href="/user/login"
                        class="underline">Resend</a></span>

            </div>
        </form>
    </div>
@endsection
