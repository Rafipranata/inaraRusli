<?php

namespace App\Http\Controllers\Admin;

use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function about(Request $request){
        $data = About::cari($request->search)->paginate(4);
        return view('Admin.about.about', compact('data'));
    }

    public function tambahAbout(){
        return view('Admin.about.tambahAbout');
    }
    
    public function detailAbout($id){
        $data = About::find($id);
        return view('Admin.about.detailAbout', compact('data'));
        
    }

    public function insertAbout(Request $request){
        
        $data = $request->all();

        if ($request->hasFile('photo')) 
        {
            $photoPath = 'photoAbout/';
            $photoName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($photoPath, $photoName);
            $data['photo'] = $photoName;
            
        };

        About::create($data);
        
        return redirect()->route('admin.about')->with('success', 'Data Berhasil Ditambahkan');
    

    }

    public function ubahAbout($id){
        $data = About::find($id);
        return view('Admin.about.ubahAbout', compact('data'));
        
    }

    public function updateAbout(Request $request, $id){

        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            
        ]);

        if ($request->hasFile('photo')) 
        {
            $photoPath = 'photoAbout/';
            $photoName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($photoPath, $photoName);
            $data['photo'] = $photoName;

        }
        
        $about = About::find($id);
        $about -> update($data);
    
        return redirect()->route('admin.about')->with('toast_success', 'Data Berhasil Diubah');
        
    }

    public function deleteAbout($id) {
        $data = About::find($id);
        
        $data -> delete();
        return redirect()->route('admin.about')->with('toast_success', 'Data Berhasil Dihapus');
    
    }
}
