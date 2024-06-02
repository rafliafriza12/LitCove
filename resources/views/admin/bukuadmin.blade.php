@extends('layouts.layoutadmin')
@section('title', 'Tambah Buku')

@section('body')
    <div class=" w-[83%] h-screen flex justify-center overflow-hidden">
        <div class="w-full flex flex-col gap-5 relative">
            <div class="w-full flex justify-between px-11 py-7">
                <div class=" flex flex-col gap-1 w-44 relative">
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-white flex justify-between bg-[#091F5B] hover:bg-[#091F5B]/90 focus:outline-none font-medium rounded-lg text-sm px-5 py-2.5 text-center items-center"
                        type="button">Category<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 4 4 4-4" />
                        </svg>
                    </button>

                    <!-- Dropdown menu -->
                    <div id="dropdown" class=" absolute top-11 z-10 hidden bg-[#E55B13] divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-white font-semibold" aria-labelledby="dropdownDefaultButton">
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/all" class="block px-4 py-2 ">All</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/Children" class="block px-4 py-2 ">Children</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/History" class="block px-4 py-2 ">History</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/Romance" class="block px-4 py-2 ">Romance</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/Education" class="block px-4 py-2 ">Education</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/Fiction" class="block px-4 py-2 ">Fiction</a>
                            </li>
                            <li class="hover:bg-[#091F5B]/90">
                                <a href="/admin/books/Comic" class="block px-4 py-2 ">Comic</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div>
                    <!-- Modal toggle -->
                    <button data-modal-target="crud-modal" data-modal-toggle="crud-modal" id="modal-button"
                        class=" text-white bg-[#E55B13] hover:bg-[#E55B13]/90 focus:outline-none font-semibold rounded-lg text-sm px-5 py-2.5 text-center"
                        type="button">
                        Add Book
                    </button>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden z-50 overflow-y-auto overflow-x-hidden flex bg-transparent backdrop-blur-[5px] absolute  justify-center items-center w-full md:inset-0 h-[calc(100%)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full flex">
                            <!-- Modal content -->
                            <div class="relative bg-[#091F5B] rounded-lg shadow">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between py-1 px-4 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Add Book
                                    </h3>
                                    <button type="button" id="close-modal"
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
                                <form class="p-4 md:p-5" method="POST" action="/admin/books/add" enctype="multipart/form-data" >
                                    @csrf
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name" class="block mb-2 text-sm font-medium text-white">Book
                                                Title</label>
                                            <input type="text" name="judul" id="name"
                                                class="bg-gray-50 text-gray-900 text-sm rounded-lg  block w-full p-2.5 focus:outline-none"
                                                placeholder="Judul Buku" required="">
                                        </div>
                                        <div class="col-span-2">
                                            <label for="penulis"
                                                class="block mb-2 text-sm font-medium text-white">Penulis</label>
                                            <input type="text" name="penulis" id="penulis"
                                                class="bg-gray-50 text-gray-900 text-sm rounded-lg  block w-full p-2.5 focus:outline-none"
                                                placeholder="Penulis" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="price"
                                                class="block mb-2 text-sm font-medium text-white">Price</label>
                                            <input type="number" name="price" id="price"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:outline-none block w-full p-2.5"
                                                placeholder="Rp.xxxx" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-white">Category</label>
                                            <select id="category" name="kategori"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg  focus:outline-none block w-full p-2.5 ">
                                                <option selected="">Select category</option>
                                                <option value="Children">Children</option>
                                                <option value="History">History</option>
                                                <option value="Romance">Romance</option>
                                                <option value="Education">Education</option>
                                                <option value="Fiction">Fiction</option>
                                                <option value="Comic">Comic</option>
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="stok"
                                                class="block mb-2 text-sm font-medium text-white">Stock</label>
                                            <input type="number" name="stok" id="stok"
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
                                                placeholder="Write product description here"></textarea>
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
                                        Add Book
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="px-11">
                @include('partials.books')
            </div>
        </div>
    </div>
@endsection
