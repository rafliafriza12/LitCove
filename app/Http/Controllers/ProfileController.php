<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function index($id){
        $credential = User::where('id', $id)->first();
        return view('pages.profile', compact('credential'));
    }

    public function edit(Request $request, $id){
        $request->validate([
            'fullname' => 'required',
            'email' => 'required',
        ]);

        try {
            $user = User::where('id', $id)->first();
            $user->fullname = $request->fullname;
            $user->email = $request->email;
            $user->save();
        } catch (\Throwable $th) {
            return redirect('/profile/setting/'.$id)->with(['error','Gagal Mengedit']);
        }

        return redirect('profile/setting/'.$id)->with(['succes', 'Sukses mengedit']);
    }
}
