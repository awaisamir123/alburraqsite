<?php

namespace App\Models;

use App\Models\Category;
use App\Models\Pimages;
use App\Models\Ptags;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    use HasFactory;
    public function tags(){
        return $this->hasMany(Ptags::class);
    }
    public function images(){
        return $this->hasMany(Pimages::class);
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

}
