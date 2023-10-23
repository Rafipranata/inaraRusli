<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;


    protected $guarded = [];

    function scopeCari($q, $search){
        $q -> where('title', 'like', '%'. $search .'%');
        
    }
}
