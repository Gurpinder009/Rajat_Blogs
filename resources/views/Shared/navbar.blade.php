<nav class="bg-gray-900 text-3xl shadow-xl z-10 sticky top-0 text-gray-50 py-5 px-6  flex justify-between items-center flex-wrap">
    <span>RSblogs</span>
    <button class ="inline-block md:hidden hover:shadow-lg border border-slate-600 py-2 px-3 rounded" onclick="toggleNav('nav-links')"><i class="fa-solid fa-bars"></i></button>
    <div id="nav-links" class="hidden md:flex w-full md:w-auto mt-5 md:mt-0  items-center flex-wrap">
   
        <a href="/" class="mx-3 block  md:w-auto rounded transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl @if(Request::is("/")) {{ "!bg-slate-800" }} @endif">home</a>
        <a href="/blogs" class="mx-3  md:w-auto  block rounded  transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl @if(Request::is("blogs")) {{ "!bg-slate-800" }} @endif">blogs</a>
        {{-- <a href="/contact-me" class="mx-3 rounded   md:w-auto  block transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl @if(Request::is("contact-me")) {{ "!bg-slate-800" }} @endif">Contact Me</a> --}}
        <a href = "/about" class="mx-3  md:w-auto  block rounded  transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl @if(Request::is("about")) {{ "!bg-slate-800" }} @endif">about</a>
        @guest
        {!! "<a href = '/user/login' class='mx-3 rounded md:w-auto  block transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl' >login</a>"!!}
        @endguest

        @auth
        {!! "<a href = '/user/logout' class='mx-3 rounded md:w-auto  block transition-all duration-500 hover:cursor-pointer hover:bg-slate-800 py-2 px-3 text-xl' onclick='return confirm(\"Want to Logout\");' >logout</a>"!!}
        @endauth
    </div>
</nav>

