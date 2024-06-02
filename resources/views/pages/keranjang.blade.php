@extends('layouts.layout')

@section('title','Keranjang')

@section('body')
    <div class=" w-screen min-h-[80vh] py-28 box-border px-28 flex flex-col items-center gap-10 bg-[#F6EEE0]">
        <div class=" w-full text-left">
            <h1 class=" text-[35px] text-[#091F5B] font-semibold">
                Keranjang <span class="font-custom text-[#E55B13]">Lit</span><span class="font-custom">Cove</span>
            </h1>
        </div>
        @include('partials.books')
    </div>
@endsection