<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Keranjang;
use App\Models\Books;

class KeranjangController extends Controller
{
    public function index($id){
        $books = Keranjang::where('user_id','=', $id)->get();
        return view('pages.keranjang', compact('books'));
    }

    public function addToCart($id){
        try {
            $book = Books::where('id',$id)->first();
            $check = Keranjang::where('book_id','=',$book->id)->where('user_id','=',auth()->user()->id)->first();
            if($check==null){
                Keranjang::create([
                    'user_id' => auth()->user()->id,
                    'book_id' => $book->id,
                    'image_path' => $book->image_path,
                    'judul' => $book->judul,
                    'penulis' => $book->penulis,
                    'deskripsi' => $book->deskripsi,
                    'kategori' => $book->kategori,
                    'harga' => $book->harga,
                ]);
            }
        } catch (\Throwable $th) {
            return redirect('/books/buy/'.$id);
        }

        return redirect('/cart/'.auth()->user()->id);
    }

    public function deleteItemCart($id){
        Keranjang::destroy($id);
        return redirect('/cart/'.auth()->user()->id);
    }

    public function buyBook($id){
        try {
            Keranjang::where('user_id','=', auth()->user()->id)->where('book_id','=',$id)->delete();
        } catch (\Throwable $th) {
            //throw $th;
            return redirect('/');
        }
        return redirect('/');
    }
}
