<div class=" w-full place-items-center gap-14 grid grid-cols-3">
    @foreach ($books as $book)
    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow hover:scale-[1.03] duration-300">
        <a href="/books/buy/{{$book->id}}">
            <div class=" w-full flex justify-center">
                <div class=" w-[70%] h-[300px] box-border px-3">
                    <img class=" h-full w-full object-fill rounded-t-lg" src="{{asset(url(''.$book->image_path))}}" alt="product image" />
                </div>
            </div>
            <div class="px-5 pb-5 flex flex-col gap-2">
                <a href="#">
                    <h5 class="text-md font-medium tracking-tight text-[#091F5B]">{{$book->penulis}}</h5>
                </a>
                <a href="#">
                    <h5 class="text-xl font-semibold tracking-tight text-[#091F5B]">{{$book->judul}}</h5>
                </a>
                <div class="flex flex-col items-start gap-2">
                    <span class="text-3xl font-bold text-gray-900 ">Rp.{{$book->harga}}</span>
                    
                </div>
            </div>
        </a>
    </div>
   
    @endforeach
</div>