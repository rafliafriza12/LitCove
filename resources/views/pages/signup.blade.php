<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('style/style.css')}}">
    <title>Document</title>
</head>
<body class=" w-screen h-screen bg-[#F6EEE0] flex flex-col justify-center items-center box-border px-28 gap-4">
    <div class=" w-full box-border px-4">
        <h1 class=" text-[40px] font-custom text-[#E55B13]">Lit<span class=" text-[#091F5B]">Cove</span></h1>
    </div>
    <div class="bg-transparent w-full h-[75%] rounded-3xl flex items-center border-[#5a5a5a] border-[1px] relative">
        <div class=" h-full w-[40%]  relative z-[-1] overflow-hidden rounded-l-2xl">
            <img src="{{url('assets/img/bg-sign.png')}}" alt="" class="w-full h-full absolute z-[-1] p-0 scale-[1.04]">
        </div>
        <div class=" h-full w-[60%] bg-[#091F5B] rounded-r-2xl flex justify-center items-center box-border p-9 text-white font-poppins">
            <div class="h-full w-full flex flex-col justify-center items-center gap-5">
                <div class=" w-full flex items-start justify-between box-border px-12 font-semibold">
                    <div>
                        <a href="/signup">
                            <h1>Sign up</h1>
                        </a>
                    </div>
                    <div>
                        <a href="/signin">
                            <h1>
                                Sign in
                            </h1>
                        </a>
                    </div>
                </div>

                <div class=" flex flex-col">
                    <div class="">
                        <h1 class=" text-[24px] font-bold text-center">
                            Let's Create Your Account!
                        </h1>
                    </div>
                    <div>
                        <h1 class=" text-[22px] text-center font-medium">
                            Welcome to <span class=" font-custom text-[27px] text-[#E55B13]">Lit</span><span class=" font-custom text-[27px]">Cove</span>
                        </h1>
                    </div>

                </div>

                <div class=" w-full box-border px-20">
                    <form action="/signup/auth" method="POST" class=" w-full box-border px-5 text-black flex flex-col gap-8">
                        @csrf
                        <div class=" w-full flex items-center justify-between box-border py-2 bg-[#D9D9D9] px-3 rounded-xl border-[#E55B13] border-[2px]">
                            <input placeholder="Email" type="email" name="email" id="email" class=" w-[95%] h-[30px] bg-transparent focus:outline-none">
                            <div>
                                <svg width="22" height="17" viewBox="0 0 22 17" fill="black" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20.5547 0H1.54531C1.1852 0 0.839833 0.149255 0.585194 0.414932C0.330555 0.680609 0.1875 1.04094 0.1875 1.41667V15.5833C0.1875 15.9591 0.330555 16.3194 0.585194 16.5851C0.839833 16.8507 1.1852 17 1.54531 17H20.5547C20.9148 17 21.2602 16.8507 21.5148 16.5851C21.7694 16.3194 21.9125 15.9591 21.9125 15.5833V1.41667C21.9125 1.04094 21.7694 0.680609 21.5148 0.414932C21.2602 0.149255 20.9148 0 20.5547 0ZM19.5092 15.5833H2.6723L7.42464 10.455L6.44702 9.47042L1.54531 14.7617V2.49333L9.98412 11.2554C10.2385 11.5193 10.5827 11.6674 10.9414 11.6674C11.3001 11.6674 11.6442 11.5193 11.8986 11.2554L20.5547 2.27375V14.6696L15.5579 9.45625L14.6007 10.455L19.5092 15.5833ZM2.43468 1.41667H19.4549L10.9414 10.2496L2.43468 1.41667Z" fill="#000"/>
                                </svg>                                    
                            </div>
                        </div>

                        <div class=" w-full flex items-center justify-between box-border py-2 bg-[#D9D9D9] px-3 rounded-xl border-[#E55B13] border-[2px]">
                            <input placeholder="Fullname" type="text" name="fullname" id="fullname" class=" w-[95%] h-[30px] bg-transparent focus:outline-none">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </div>
                        </div>

                        <div class=" w-full flex items-center justify-between box-border py-2 bg-[#D9D9D9] px-3 rounded-xl border-[#E55B13] border-[2px]">
                            <input placeholder="Password" type="password" name="password" id="password" class=" w-[95%] h-[30px] bg-transparent focus:outline-none">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 1 0-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 0 0 2.25-2.25v-6.75a2.25 2.25 0 0 0-2.25-2.25H6.75a2.25 2.25 0 0 0-2.25 2.25v6.75a2.25 2.25 0 0 0 2.25 2.25Z" />
                                </svg>
                            </div>
                        </div>
                        <div class=" flex gap-3 items-center">
                            <input type="checkbox">
                            <h1 class=" text-white">I agree to the terms of service</h1>
                        </div>
                        <div class=" w-full h-[45px]">
                            <button type="submit" class=" w-full h-full bg-[#E55B13] rounded-2xl text-white hover:scale-[1.02] duration-300 font-bold">
                                Sign up
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>