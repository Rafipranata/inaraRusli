<?php

namespace App\Http\Controllers;

use App\Models\User; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile()
    {
        return view('Admin.profile');
    }

    public function insertprofile(Request $request)
    {
        $data = $request->all();
        
        if ($request->hasFile('photo'))
        {
            $photoPath = 'photoAdmin/';
            $photoName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($photoPath, $photoName);
            $data['photo'] = $photoName;
            
        }

        
        User::find(Auth::user()->id)->update($data); 
        
        return redirect()->route('admin.index')->with('success', 'Data Berhasil Ditambahkan'); 
    }
}
