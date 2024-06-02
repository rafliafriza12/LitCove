<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Books;
use Illuminate\Support\Facades\Storage;

class BooksController extends Controller
{
    public function index($id){
        $selectedBook = Books::where('id',$id)->first();
        $books = Books::where('id','!=',$id)->get();
        return view('pages.buy', compact('books','selectedBook'));
    }


    public function createBook(Request $request)
    {
        // ddd($request);
        // dd($request->file('image'));
        // Validasi input
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'price' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif',
            'deskripsi' => 'required',
        ]);

        // Menyimpan gambar ke direktori
        // ddd($request->foto);
        try {
            $image = $request->file('image');
            $imageName = time().'.'.$image->extension(); 
            $image->move(public_path('images'), $imageName);
            
                Books::create([
                    'judul' => $request->judul,
                    'penulis' => $request->penulis,
                    'deskripsi' => $request->deskripsi,
                    'kategori' => $request->kategori,
                    'harga' => $request->price,
                    'stok' => $request->stok,
                    'image_path' => 'images/' . $imageName,
                ]);
        } catch (\Throwable $th) {
            return redirect('/admin/books/all')->with(['error', 'gagal memasukkan data']);
        }
            return redirect('/admin/books/'.$request->kategori);

    }

    public function editBook(Request $request, $id){
        // ddd($request);
        $request->validate([
            'judul' => 'required',
            'penulis' => 'required',
            'price' => 'required',
            'kategori' => 'required',
            'stok' => 'required',
            'deskripsi' => 'required',
        ]);

        $book = Books::where('id',$id)->first();
        $book->judul = $request->judul;
        $book->penulis = $request->penulis;
        $book->harga = $request->price;
        $book->kategori = $request->kategori;
        $book->stok = $request->stok;
        $book->deskripsi = $request->deskripsi;
        if ($request->hasFile('image')) {
            // Hapus gambar lama jika ada
            if ($book->image && Storage::exists('public/images/' . $book->image)) {
                Storage::delete('public/images/' . $book->image);
            }

            // Simpan gambar baru
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('images'), $imageName);
            $book->image = $imageName;
        }
        $book->save();
        // try {
        // } catch (\Throwable $th) {
        //     return redirect('/admin/books/all');
        // }
        return redirect('/admin/books/'.$request->kategori);
    }

    public function deleteBook($id){
        Books::destroy($id);
        return redirect('/admin/books/all');
    }

    public function category($category){
        $books = Books::where('kategori','=',$category)->get();
        return view('pages.kategori', compact('books','category'));
    }

    

    
}
