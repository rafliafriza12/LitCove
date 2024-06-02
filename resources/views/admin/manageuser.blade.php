@extends('layouts.layoutadmin')
@section('title', 'Manage User')

@section('body')
    <div class=" w-[83%] h-screen flex justify-center items-center overflow-hidden px-11 py-8">
        <div class=" w-full h-full">
            <div class="overflow-x-hidden">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 ">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
                        <tr class="border-b border-gray-700">
                            <th scope="col" class="px-6 py-3">
                                Nama
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        @if ($user->role !== 1)
                        <tr class="bg-white border-b border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                {{$user->fullname}}
                            </th>
                            <td class="px-6 py-4 text-gray-900">
                                {{$user->email}}
                            </td>
                            <td class="px-6 py-4 text-gray-900">
                                <form action="/admin/manage-user/delete/{{$user->id}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class=" px-4 py-1 rounded-sm bg-red-500 text-white font-semibold">Hapus</button>
                                </form>
                            </td>
                            
                        </tr>
                        @endif
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
@endsection
