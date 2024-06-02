<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index(){
        return view('pages.signin');
    }

    public function signup(){
        return view('pages.signup');
    }

    public function register(Request $request){
        try {
            $credential = $request->validate([
                'email' => 'required',
                'fullname' => 'required',
                'password' => 'required',
            ]);

            User::create([
                'email' => $request->email,
                'fullname' => $request->fullname,
                'password' => bcrypt($request->password),
            ]);

            return redirect('/signin');
        } catch (\Throwable $th) {
            return redirect('/signup');
        }
    }

    public function authenticate(Request $request){
        $credential = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        if(Auth::attempt($credential)){
            if(auth()->user()->role === 1){
                $request->session()->regenerate();
                return redirect('/admin/books/all');
            }else{
                $request->session()->regenerate();
                return redirect('/');
            }
        }

        return redirect('/landing');
    }

    public function signout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/landing');
    }
}
