<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gallery;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GalleryController extends Controller
{
    public function gallery(){
        $data = Gallery::paginate(2);

        return view('Admin.gallery.gallery', compact('data'));
    
    }

    public function tambahGallery(){
        return view('Admin.gallery.tambahGallery');
    }

    public function  insertGallery(Request $request){

        $data = $request->all();

        if ($request->hasFile('photo')) 
        {
            $photoPath = 'photoGallery/';
            $photoName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($photoPath, $photoName);
            
            $data['photo'] = $photoName;
            
        };

        Gallery::create($data);
        
        return redirect()->route('admin.gallery')->with('success', 'Data Berhasil Ditambahkan');
        
    }

    public function  ubahGallery($id){
        $data = Gallery::find($id);
        return view('Admin.gallery.ubahGallery', compact('data') );
    
        
    }

    public function updateGallery(Request $request, $id) {
        $data1 = $request->validate([
            'photo' => 'required',
        ]);

        if ($request->hasFile('photo')) // table photo database
        {
            $photoPath = 'photoGallery/';// folder photo
            $photoName = $request->file('photo')->getClientOriginalName();
            $request->file('photo')->move($photoPath, $photoName);
            $data1['photo'] = $photoName;
            
            $gallery = Gallery::find($id);
            $gallery -> update($data1);

            return redirect()->route('admin.gallery')->with('toast_success', 'Data Berhasil Diubah');

        };

    }

    public function deleteGallery($id){
        $data = Gallery::find($id);
        
        $data -> delete();
        return redirect()->route('admin.gallery')->with('toast_success', 'Data Berhasil Dihapus');
    

        
    }
}
