<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;
    
    // protected $fillable = [
    //     'productName',
    //     'productPrice',
    //     'productImage',
    //     'description',
    // ];

    protected $guarded = [];
    public function  Kategori(){
        return $this -> belongsTo(Kategori::class,'kategori_id');
        
    }
    function scopeCari($q, $search){
        $q -> where('productName', 'like', '%'. $search .'%');
        
    }
}
