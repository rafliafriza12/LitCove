@extends('layouts.layout')
@section('title', 'Landing Page')
    
@section('body')
<div class=" font-poppins">
    <div class="w-screen h-screen bg-[#F6EEE0] box-border px-28 text-[#091F5B] flex flex-col justify-end items-center pb-[10vh]">
        <div class=" w-full h-full flex justify-between items-end">
            <div class=" w-[50%] h-[86%] flex flex-col justify-center items-center box-border px-5 gap-4">
                <h1 class="text-[40px] font-custom">Welcome To LitCove</h1>
                <p class=" text-justify text-[18px] font-medium">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quis laudantium temporibus placeat esse, veniam alias facere amet magnam dolorem sed odio beatae quod itaque! Voluptatum exercitationem iusto maiores vel quidem.</p>
                <div class=" flex flex-col gap-5 w-full mt-2">
                    <a href="" class=" bg-[#E55B13] w-[30%] text-center text-white font-medium py-2 px-2 rounded-2xl"> Learn More</a>
                    <div class=" flex gap-3">
                        <a href="" class="bg-[#091F5B] w-10 h-10 p-2 rounded-full hover:scale-[1.05] duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" invert-[1]" viewBox="0 0 24 24" id="instagram"><g fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round"><rect width="21" height="21" x="1.5" y="1.5" rx="5.48" ry="5.48"></rect><circle cx="12" cy="12" r="5.5"></circle><circle cx="18" cy="5" r=".5"></circle></g></svg>
                        </a>
                        <a href="" class="bg-[#091F5B] w-10 h-10 p-2 rounded-full hover:scale-[1.05] duration-300">
                            <svg xmlns="http://www.w3.org/2000/svg" class=" invert-[1]" viewBox="0 0 24 24" id="twitter"><path d="M8.145 21.449c-2.15 0-4.638-.552-7.39-2.097-.208-.117-.304-.364-.23-.59s.297-.375.533-.342c1.814.208 3.795-.217 5.275-1.086-1.695-.398-3.065-1.499-3.788-3.098a.499.499 0 0 1 .08-.536c.13-.148.334-.205.522-.148.218.067.435.113.644.138-1.287-.768-2.665-2.238-2.665-4.441a.5.5 0 0 1 .814-.389c.16.13.331.239.508.325a5.362 5.362 0 0 1-.869-1.817c-.332-1.282-.139-2.582.557-3.756a.501.501 0 0 1 .821-.057c1.472 1.839 4.088 4.061 8.294 4.466-.078-1.331.322-3.512 2.16-4.585 2.261-1.32 4.436-1.15 6.305.487.828-.184 2.135-.752 2.406-.941a.5.5 0 0 1 .77.538c-.125.471-.408.995-.76 1.463.279-.083.514-.167.639-.231a.5.5 0 0 1 .652.711c-.588.93-1.539 1.796-2.174 2.266.343 4.225-2.126 8.946-6.089 11.577-1.47.975-3.886 2.143-7.015 2.143zM3.15 19.406c5.351 2.195 9.403.428 11.456-.935 3.756-2.494 6.067-6.988 5.62-10.929a.498.498 0 0 1 .222-.474c.269-.177.68-.502 1.094-.905-.407.088-.802.147-1.089.148-.276-.033-.447-.169-.492-.405a.498.498 0 0 1 .306-.559c.283-.113.665-.454.995-.872-.566.219-1.178.413-1.628.478a.497.497 0 0 1-.413-.131c-1.578-1.482-3.362-1.658-5.306-.524-1.745 1.02-1.784 3.397-1.6 4.148a.499.499 0 0 1-.513.619C7.331 8.829 4.427 6.719 2.68 4.773a3.808 3.808 0 0 0-.132 2.344c.294 1.133 1.034 2.002 1.596 2.33a.5.5 0 0 1-.153.922 3.106 3.106 0 0 1-1.752-.185c.521 2.085 2.689 3.067 3.299 3.135a.501.501 0 0 1 .268.879c-.437.369-1.091.547-1.828.51.836 1.114 2.132 1.754 3.681 1.788a.5.5 0 0 1 .323.872c-1.228 1.1-2.99 1.823-4.832 2.038z"></path></svg>
                        </a>
                        <a href="" class="bg-[#091F5B] w-10 h-10 p-2 rounded-full hover:scale-[1.05] duration-300">
                            <svg class=" invert-[1]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" id="facebook"><path fill="none" stroke="#000" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M12.5 6h-3V4a1 1 0 0 1 1-1h1V.5h-2a3 3 0 0 0-3 3V6h-2v2.5h2v7h3v-7h2l1-2.5z" clip-rule="evenodd"></path></svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class=" w-[50%] h-[86%] flex justify-center items-center box-border p-24 ">
                <div class=" w-full h-full relative overflow-hidden">
                    <img class=" object-fill absolute w-full h-full" src="{{asset(url('assets/img/blob.png'))}}" alt="">
                    <img class="absolute z-[1] h-full w-full" src="{{asset(url('assets/img/hero.png'))}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class=" w-screen h-[50vh] flex flex-col gap-7 justify-center items-center">
        <h1 class=" font-custom text-[#091F5B] text-[50px]">
            Book Types
        </h1>
        <div class=" w-full flex justify-center items-center gap-14">
            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/children.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">Children</h1>
            </div>

            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/history.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">History</h1>
            </div>

            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/romance.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">Romance</h1>
            </div>

            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/education.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">Education</h1>
            </div>

            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/fiction.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">Fiction</h1>
            </div>

            <div class=" flex flex-col items-center gap-2">
                <div class=" w-20 h-20 p-4 bg-[#091F5B] rounded-full">
                    <img class=" w-full h-full" src="{{asset(url('assets/img/comic.png'))}}" alt="">
                </div>
                <h1 class=" text-[#091F5B] font-semibold text-[18px]">Comic</h1>
            </div>
           
        </div>
    </div>
</div>
@endsection