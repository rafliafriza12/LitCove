@extends('layouts.layout')

@section('title','{{$category}}')

@section('body')
    <div class=" w-screen min-h-[80vh] py-28 box-border px-28 flex flex-col items-center gap-10 bg-[#F6EEE0]">
        <div class=" w-full text-left">
            <h1 class=" text-[35px] text-[#091F5B] font-semibold">
                Kategori {{$category}}
            </h1>
        </div>
        @include('partials.booksuser')
    </div>
@endsection