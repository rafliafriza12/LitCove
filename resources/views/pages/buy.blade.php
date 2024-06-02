@extends('layouts.layout')
@section('title', 'Buy')

@section('body')
    <div class=" w-screen py-28 box-border px-28 flex flex-col items-center gap-10 bg-[#F6EEE0]">
        <div class=" w-full flex gap-16 items-center">
            <div class=" w-[350px] h-[500px]">
                <img class=" w-full h-full object-fill" src="{{asset(url(''.$selectedBook->image_path))}}" alt="">
            </div>
            <div class="w-[70%] text-[#091F5B] flex flex-col gap-10">
                <div class=" flex flex-col">
                    <h1 class="text-[30px] font-bold">{{$selectedBook->judul}}</h1>
                    <h1 class=" font-medium text-[#A47551] text-[17px]">{{$selectedBook->penulis}}</h1>
                </div>
                <div>
                    <p class=" text-justify font-medium">{{$selectedBook->deskripsi}}</p>
                </div>
                <div class=" flex items-center w-full justify-between">
                    <h1 class=" text-[23px] font-semibold text-[#E55B13]">Rp.{{$selectedBook->harga}}</h1>
                    <div class=" flex text-white font-medium gap-10">
                        <form action="/cart/add-to-cart/{{$selectedBook->id}}" method="POST">
                            @csrf
                            <button type="submit" class=" bg-[#E55B13] px-4 py-2 rounded-3xl">Tambah ke Keranjang</button>
                        </form>
                            <button id="buy-{{$selectedBook->id}}" onclick="openModalBuyBook({{$selectedBook->id}})" type="submit" class=" bg-[#E55B13] px-14 py-2 rounded-3xl">Beli</button>
                    </div>
                </div>
            </div>
        </div>
        <div id="crud-modal-buy-{{$selectedBook->id}}" tabindex="-1" aria-hidden="true"
            class="hidden z-50 overflow-y-auto overflow-x-hidden flex bg-transparent backdrop-blur-[5px] absolute top-0  justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full flex">
                <!-- Modal content -->
                <div class="relative bg-[#091F5B] rounded-lg shadow">
                    <!-- Modal header -->
                    <div
                        class="flex items-center justify-between py-1 px-4 border-b rounded-t dark:border-gray-600">
                        <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                            Tekan lanjut untuk pemesanan lewat whatsapp
                        </h3>
                        <button type="button" id="close-modal-buy-{{$selectedBook->id}}"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="crud-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                    </div>
                    <!-- Modal body -->
                    <form class="p-4 md:p-5" method="POST" action="/books/buy/{{$selectedBook->id}}">
                        @method('DELETE')
                        @csrf
                        <button onclick="buy('{{$selectedBook->judul}}','{{$selectedBook->penulis}}','{{$selectedBook->kategori}}','{{auth()->user()->fullname}}','{{auth()->user()->email}}')"
                            class="text-white inline-flex items-center bg-[#E55B13] hover:bg-[#E55B13]/90  focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                            Lanjut
                        </button>
                    </form>
                </div>
            </div>
        </div>
        <div class=" px-3 w-full text-left">
            <h1 class=" font-medium text-[25px] text-[#091F5B]">Produk Menarik Lainnya</h1>    
        </div>

        @include('partials.booksuser')
    </div>
@endsection