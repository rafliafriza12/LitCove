@extends('layouts.layout')
@section('title', 'Home')
    
@section('body')
    <div class=" w-screen overflow-x-hidden bg-[#F6EEE0] flex items-center gap-20 flex-col px-28 pt-20 pb-12">
        <div class=" w-[90%] h-[30vh] mt-20 overflow-hidden rounded-2xl">
            <img class=" w-full h-full object-cover rounded-2xl" src="{{asset(url(''.$iklan->image_path))}}" alt="">
        </div>

        <div class=" w-full h-[30vh] flex flex-col gap-7 justify-center items-center">
        <h1 class=" font-custom text-[#091F5B] text-[50px]">
            Book Types
        </h1>
        <div class=" w-full flex justify-evenly items-center">
            <a href="/books/category/Children" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/children.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">Children</h1>
                </div>
            </a>

            <a href="/books/category/History" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/history.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">History</h1>
                </div>
            </a>

            <a href="/books/category/Romance" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/romance.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">Romance</h1>
                </div>
            </a>

            <a href="/books/category/Education" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/education.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">Education</h1>
                </div>
            </a>

            <a href="/books/category/Fiction" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/fiction.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">Fiction</h1>
                </div>
            </a>

            <a href="/books/category/Comic" class=" hover:scale-[1.05] duration-300">
                <div class=" flex flex-col items-center gap-2">
                    <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                        <img class=" w-full h-full" src="{{asset(url('assets/img/comic.png'))}}" alt="">
                    </div>
                    <h1 class=" text-[#091F5B] font-semibold text-[18px]">Comic</h1>
                </div>
            </a>
           
        </div>
    </div>

        <div>
            <h1 class=" text-[35px] text-[#091F5B] font-semibold">
                Rekomendasi <span class="font-custom text-[#E55B13]">Lit</span><span class="font-custom">Cove</span> Untukmu
            </h1>
        </div>

        @include('partials.booksuser')
        
    </div>
@endsection