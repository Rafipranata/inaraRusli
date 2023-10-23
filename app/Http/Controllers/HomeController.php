<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\About;
use App\Models\Catalog;
use App\Models\Contact;
use App\Models\Gallery;
use App\Models\Carousel;
use App\Models\Kategori;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Gallery(){
        $data = Gallery::paginate(4);
        return view('gallery', compact('data'));
        
    }

    public function Catalog(){

        $data = Catalog::latest()->get();
        $kategori = Kategori::all();
        return view('katalog', compact('data', 'kategori'));
    }

    public function About(){
        $data = About::all();
        return view('about', compact('data'));
        
    }


    public function Home() {
        $data = Carousel::all();
        $aboutHome = Page::all();
        $gallery = Gallery::all();
        $catalog = Catalog::latest()->paginate(3);
        return view('welcome', compact('data', 'gallery', 'catalog', 'aboutHome'));
        
    }

    public function Contact() {
        $facebook = Contact::where('id', 1)->first();
        $instagram = Contact::where('id', 2)->first();
        $youtube = Contact::where('id', 3)->first();
        $location = Contact::where('id', 4)->first();
    
        return view('contact', compact('facebook', 'instagram', 'youtube', 'location'));
    }

    
    
}
