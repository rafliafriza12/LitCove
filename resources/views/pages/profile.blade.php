@extends('layouts.layout')
@section('title', 'Profile')

@section('body')
    <div class=" w-screen overflow-x-hidden flex justify-center items-center pt-24 px-28 box-border">
        <div class=" box-border w-full flex flex-col justify-center items-center px-60 gap-16 py-24">
            <h1 class=" font-semibold text-[30px] text-left w-full">{{$credential->fullname}}</h1>
            <div class="w-full">
                <form action="/profile/setting/{{auth()->user()->id}}/edit" method="POST" class=" w-full flex flex-col items-center justify-center gap-12">
                    @csrf
                    @method('PUT')
                    <div class=" w-full flex flex-col gap-3">
                        <label for="fullname" class=" px-2 text-[18px] font-medium">Name</label>
                        <input name="fullname" id="fullname" class=" w-full px-9 py-5 text-[20px] font-medium rounded-3xl border-[#E55B13] border-[2px]" type="text" value="{{$credential->fullname}}">
                    </div>
                    <div  class=" w-full flex flex-col gap-3">
                        <label for="email" class=" px-2 text-[18px] font-medium">Email Address</label>
                        <input name="email" id="email" type="email" class=" w-full px-9 py-5 text-[20px] font-medium rounded-3xl border-[#E55B13] border-[2px]" value="{{$credential->email}}">
                    </div>
                    <button type="submit" class=" px-10 py-4 bg-[#E55B13] text-white rounded-2xl font-semibold">Save Changes</button>
                </form>
            </div>
        </div>
    </div>
@endsection
