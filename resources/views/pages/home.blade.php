@extends('layouts.layout')
@section('title', 'Home')
    
@section('body')
    <div class=" w-screen overflow-x-hidden bg-[#F6EEE0] flex gap-20 flex-col px-28 pt-20 pb-12">
        <div class=" w-full h-[45vh] mt-20 rounded-2xl">
            <img class=" w-full h-full object-cover rounded-2xl" src="{{asset(url('assets/img/jumbotron.png'))}}" alt="">
        </div>

        <div class=" w-full flex justify-between items-center">
            <div class="w-[20vw] h-[25vh] bg-[#091F5B] rounded-2xl flex justify-center items-center text-white font-bold text-[18px]">
                <h1 class=" w-[40%] text-center">
                    Buku Baru Andalan
                </h1>
                <div class=" h-full flex items-center">
                    <img class=" h-[70%]" src="{{asset(url('assets/img/1.png'))}}" alt="">
                </div>
            </div>
            <div class="w-[20vw] h-[25vh] bg-[#091F5B] rounded-2xl flex justify-center items-center text-white font-bold text-[18px]">
                <h1 class=" w-[40%] text-center">
                    Buku Pilihan
                </h1>
                <div class=" h-full flex items-center">
                    <img class=" h-[70%]" src="{{asset(url('assets/img/2.png'))}}" alt="">
                </div>
            </div>
            <div class="w-[20vw] h-[25vh] bg-[#091F5B] rounded-2xl flex justify-center items-center text-white font-bold text-[18px]">
                <h1 class=" w-[40%] text-center">
                    International Book
                </h1>
                <div class=" h-full flex items-center">
                    <img class=" h-[70%]" src="{{asset(url('assets/img/3.png'))}}" alt="">
                </div>
            </div>
        </div>

        <div>
            <h1 class=" text-[35px] text-[#091F5B] font-semibold">
                Rekomendasi <span class="font-custom text-[#E55B13]">Lit</span><span class="font-custom">Cove</span> Untukmu
            </h1>
        </div>

        <div class=" w-full place-items-center gap-14 grid grid-cols-3">
            @for($i = 0; $i<30 ; $i++)
            <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow">
                <div class=" w-full flex justify-center">
                    <div class=" w-[70%] h-[300px] box-border px-3">
                        <img class=" h-full w-full object-fill rounded-t-lg" src="{{asset(url('assets/img/1.png'))}}" alt="product image" />
                    </div>
                </div>
                <div class="px-5 pb-5">
                    <a href="#">
                        <h5 class="text-xl font-semibold tracking-tight text-gray-900">Apple Watch Series 7 GPS, Aluminium Case, Starlight Sport</h5>
                    </a>
                    <div class="flex items-center mt-2.5 mb-5">
                        <div class="flex items-center space-x-1 rtl:space-x-reverse">
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-yellow-300" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                            <svg class="w-4 h-4 text-gray-200 dark:text-gray-600" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z"/>
                            </svg>
                        </div>
                        <span class="bg-blue-100 text-blue-800 text-xs font-semibold px-2.5 py-0.5 rounded  ms-3">5.0</span>
                    </div>
                    <div class="flex items-center justify-between">
                        <span class="text-3xl font-bold text-gray-900 ">$599</span>
                        <a href="#" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center ">Add to cart</a>
                    </div>
                </div>
            </div>
            

            @endfor
        </div>
    </div>
@endsection