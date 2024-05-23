@guest
<div class="fixed top-0 z-[100] h-[12vh] w-full  flex justify-between items-center  box-border px-28 bg-[#F6EEE0] shadow-[0px_1px_10px_#5a5a5a]">
    <div>
        <h1 class=" text-[40px] font-custom text-[#E55B13]">Lit<span class=" text-[#091F5B]">Cove</span></h1>
    </div>
    <div class=" font-semibold text-[#091F5B]">
        <ul class=" flex gap-8">
            <li>
                <a href="">
                    Home
                </a>
            </li>
            <li>
                <a href="">
                    My Books
                </a>
            </li>
            <li>
                <a href="">
                    About us
                </a>
            </li>
            <li>
                <a href="/signin">
                    Sign in
                </a>
            </li>
        </ul>
    </div>
</div>
@endguest

@auth
<div class="fixed top-0 z-[100] h-[12vh] w-full  flex justify-between items-center  box-border px-28 bg-[#F6EEE0] shadow-[0px_1px_10px_#5a5a5a]">
    <div>
        <h1 class=" text-[40px] font-custom text-[#E55B13]">Lit<span class=" text-[#091F5B]">Cove</span></h1>
    </div>
    <div class=" font-semibold text-[#091F5B]">
        <ul class=" flex gap-8">
            <li>
                <a href="">
                    Home
                </a>
            </li>
            <li>
                <a href="">
                    My Books
                </a>
            </li>
            <li>
                <a href="">
                    About us
                </a>
            </li>
            <li>
                <form action="/logout" method="POST">
                    @csrf
                    <button type="submit">
                        Sign out
                    </button>
                </form>
            </li>
            <li class=" flex gap-3 items-center font-medium">
                <h1 class=" bg-[#E55B13] px-3 py-1 rounded-xl text-white">{{auth()->user()->fullname}}</h1>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>
            </li>
        </ul>
    </div>
</div>
@endauth

