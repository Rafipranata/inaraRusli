<?php

namespace App\Http\Controllers\Admin;

use App\Models\Catalog;
use App\Models\Kategori;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatalogController extends Controller
{

    public function catalog(Request $request){
        $data = Catalog::cari($request->search)->paginate(4);
        $dataKategori = Kategori::all();
        $kategori = Kategori::all();


        return view('Admin.catalog.catalog',compact('data', 'dataKategori', 'kategori'));
    
    }
    public function tambahProduk(){
        $kategori = Kategori::all();
        return view('Admin.catalog.tambahCatalog',compact('kategori') );
        
    }

    public function insertCatalog(Request $request){

        $data = $request->all();

        if ($request->hasFile('productImage')) 
        {
            $photoPath = 'photoProduk/';
            $photoName = $request->file('productImage')->getClientOriginalName();
            $request->file('productImage')->move($photoPath, $photoName);
            $data['productImage'] = $photoName;
            
        };

        Catalog::create($data);
        
        return redirect()->route('admin.catalog')->with('success', 'Data Berhasil Ditambahkan');
    }

    public function deleteCatalog($id){
        $data = Catalog::find($id);
        
        $data -> delete();
        return redirect()->route('admin.catalog')->with('toast_success', 'Data Berhasil Dihapus');
    
        
    }

    public function  lihatCatalog($id){
        $data = Catalog::find($id);
        $kategori = Kategori::all(); 
        return view('Admin.catalog.ubahCatalog', compact('data', 'kategori') );
    
        
    }

    public function updateCatalog(Request $request, $id){
        $data = Catalog::find($id);
        $data1 = $request->validate([
            'productName' => 'required',
            'productPrice' => 'required',
            'description' => 'required',
            'kategori_id' => 'required',
        ]);
        
        if ($request->hasFile('productImage')) 
        {
            $photoPath = 'photoProduk/';
            $photoName = $request->file('productImage')->getClientOriginalName();
            $request->file('productImage')->move($photoPath, $photoName);
            $data1['productImage'] = $photoName;
            
        };
        $data -> update($data1);

        return redirect()->route('admin.catalog')->with('toast_success', 'Data Berhasil Diubah');
    }


    public function  insertKategori(Request $request){
        $kategori = $request->all();

        Kategori::create($kategori);

        return redirect()->route('admin.catalog');
    }

    public function deleteKategori($id){
        $data = Kategori::find($id);
        
        $data ->delete();

        return redirect()->route('admin.catalog');
    }

    
}
