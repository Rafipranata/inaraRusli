<?php

namespace App\Http\Controllers\Admin;

use App\Models\Page;
use App\Models\Catalog;
use App\Models\Gallery;
use App\Models\Carousel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index(){
        $data = Carousel::all();
        $about = Page::all();
        $jumlahCatalog = Catalog::count();
        $jumlahGallery = Gallery::count();
        return view('Admin.index.index', compact('jumlahCatalog', 'jumlahGallery', 'data', 'about'));
        
    }

    public function tambahCarousel(){
        return view('Admin.index.tambahCarousel');
        
    }

    
    public function insertCarousel(Request $request){
        $data = $request->all();

        if ($request->hasFile('carouselImage')) 
        {
            $photoPath = 'photoCarousel/';
            $photoName = $request->file('carouselImage')->getClientOriginalName();
            $request->file('carouselImage')->move($photoPath, $photoName);
            $data['carouselImage'] = $photoName;
            
        };

        Carousel::create($data);

        return redirect()->route('admin.index');
    
    }

    public function  deleteCarousel($id){
        $data = Carousel::find($id);

        $data->delete();

        return redirect()->route('admin.index');
        
    }

    public function ubahCarousel($id) {
        $data = Carousel::find($id);
        return view('Admin.index.ubah', compact('data'));
    }

    public function updateCarousel(Request $request, $id){
        $data = $request->validate([
            'carouselImage' => 'required',
        ]);
        
        if ($request->hasFile('carouselImage')) // table photo database
        {
            $photoPath = 'photoCarousel/';// folder photo
            $photoName = $request->file('carouselImage')->getClientOriginalName();
            $request->file('carouselImage')->move($photoPath, $photoName);
            $data['carouselImage'] = $photoName;
            
            $gallery = Carousel::find($id);
            $gallery -> update($data);

            return redirect()->route('admin.index')->with('toast_success', 'Data Berhasil Diubah');

        };
    }

    public function ubahAbout(){
        
        
    }

    public function updateabout() {
        
    }
    
}
