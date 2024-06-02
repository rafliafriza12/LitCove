<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Books;
use App\Models\User;

class AdminController extends Controller
{
    public function index($category){
        if($category=="all"){
            $books = Books::all();
        }else{
            $books = Books::where('kategori','=',$category)->get();
        }
        return view('admin.bukuadmin', compact('books'));
    }

    public function manageUser(){
        $users = User::all();
        return view('admin.manageuser', compact('users'));
    }

    public function deleteUser($id){
        User::destroy($id);
        return redirect('/admin/manage-user');
    }
}
