<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Iklan;
use Illuminate\Support\Facades\Storage;

class IklanController extends Controller
{
    public function updateIklan(Request $request){
        // ddd($request);
            $iklan = Iklan::first();
                $image = $request->file('image');
                $imageName = time().'.'.$image->extension(); 
                $image->move(public_path('images'), $imageName);
                // $request->image->move(public_path('images'), $imageName);
                $iklan->image_path = 'images/'.$imageName;
                $iklan->save();
            

        return redirect('/admin/books/all');
    }
}
