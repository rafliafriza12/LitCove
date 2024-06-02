<div class=" w-full {{auth()->user()->role === 1 ? 'h-[59%] min-h-[74vh] pb-20 overflow-x-hidden' : ''}} place-items-center gap-14 grid grid-cols-3">
    @foreach ($books as $book)
    <div class="w-full max-w-sm bg-white border-[2px] border-gray-200 rounded-lg shadow hover:scale-[1.03] duration-300">
        <a href="/books/buy/{{auth()->user()->role === 1 ? $book->id : $book->book_id}}">
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
                    @if (auth()->user()->role === 1)
                    <div class=" flex gap-3">
                        <button onclick="openModalEditBook({{$book->id}})" id="edit-button-{{$book->id}}" class=" bg-[#E55B13] py-1 px-3 rounded text-white font-semibold">Edit</button>
                        <form action="/admin/book/delete/{{$book->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 text-white font-semibold py-1 px-3 rounded">
                                Hapus
                            </button>
                        </form>
                    </div>
                    @else
                    <div class=" flex gap-3">
                        <form action="/cart/delete/{{$book->id}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="bg-red-500 text-white font-semibold py-1 px-3 rounded">
                                Hapus
                            </button>
                        </form>
                    </div>
                    @endif
                </div>
            </div>
        </a>
        
    </div>
    <div id="crud-modal-edit-{{$book->id}}" tabindex="-1" aria-hidden="true"
        class="hidden z-50 overflow-y-auto overflow-x-hidden flex bg-transparent backdrop-blur-[5px] absolute top-0  justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full">
        <div class="relative p-4 w-full max-w-md max-h-full flex">
            <!-- Modal content -->
            <div class="relative bg-[#091F5B] rounded-lg shadow">
                <!-- Modal header -->
                <div
                    class="flex items-center justify-between py-1 px-4 border-b rounded-t dark:border-gray-600">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                        Edit Book
                    </h3>
                    <button type="button" id="close-modal-edit-{{$book->id}}"
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
                <form class="p-4 md:p-5" method="POST" action="/admin/books/edit/{{$book->id}}" enctype="multipart/form-data" >
                    @method('PUT')
                    @csrf
                    <div class="grid gap-4 mb-4 grid-cols-2">
                        <div class="col-span-2">
                            <label for="name" class="block mb-2 text-sm font-medium text-white">Book
                                Title</label>
                            <input type="text" name="judul" id="name" value="{{$book->judul}}"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg  block w-full p-2.5 focus:outline-none"
                                placeholder="Judul Buku" required="">
                        </div>
                        <div class="col-span-2">
                            <label for="penulis"
                                class="block mb-2 text-sm font-medium text-white">Penulis</label>
                            <input type="text" name="penulis" id="penulis" value="{{$book->penulis}}"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg  block w-full p-2.5 focus:outline-none"
                                placeholder="Penulis" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="price"
                                class="block mb-2 text-sm font-medium text-white">Price</label>
                            <input type="number" name="price" id="price" value="{{$book->harga}}"
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                placeholder="Rp.xxxx" required="">
                        </div>
                        <div class="col-span-2 sm:col-span-1">
                            <label for="category"
                                class="block mb-2 text-sm font-medium text-white">Category</label>
                            <select id="category" name="kategori" 
                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:outline-none block w-full p-2.5 ">
                                <option value="" disabled {{ is_null($book->kategori) ? 'selected' : '' }}>Select category</option>
                                <option value="Children" {{ $book->kategori == 'Children' ? 'selected' : '' }}>Children</option>
                                <option value="History" {{ $book->kategori == 'History' ? 'selected' : '' }}>History</option>
                                <option value="Romance" {{ $book->kategori == 'Romance' ? 'selected' : '' }}>Romance</option>
                                <option value="Education" {{ $book->kategori == 'Education' ? 'selected' : '' }}>Education</option>
                                <option value="Fiction" {{ $book->kategori == 'Fiction' ? 'selected' : '' }}>Fiction</option>
                                <option value="Comic" {{ $book->kategori == 'Comic' ? 'selected' : '' }}>Comic</option>
                            </select>
                        </div>
                        <div class="col-span-2">
                            <label for="stok"
                                class="block mb-2 text-sm font-medium text-white">Stock</label>
                            <input type="number" name="stok" id="stok" value="{{$book->stok}}"
                                class="bg-gray-50 text-gray-900 text-sm rounded-lg  block w-full p-2.5 focus:outline-none"
                                placeholder="Penulis" required="">
                        </div>
                        <div class="col-span-2">
    
                            <label class="block mb-2 text-sm font-medium text-white"
                                for="multiple_files">Upload Product Photo</label>
                            <input
                                class="block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none"
                                id="multiple_files" name="image" type="file">
    
                        </div>
                        <div class="col-span-2">
                            <label for="description"
                                class="block mb-2 text-sm font-medium text-white">Product
                                Description</label>
                            <textarea id="description" rows="4" name="deskripsi"
                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:outline-none"
                                placeholder="Write product description here">{{$book->deskripsi}}</textarea>
                        </div>
                    </div>
                    <button type="submit"
                        class="text-white inline-flex items-center bg-[#E55B13] hover:bg-[#E55B13]/90  focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center ">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                clip-rule="evenodd"></path>
                        </svg>
                        Edit Book
                    </button>
                </form>
            </div>
        </div>
    </div>
    @endforeach
</div>