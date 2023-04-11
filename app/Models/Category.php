<?php

namespace App\Models;

use App\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    public function category(){
        return $this->belongsTo(Portfolio::class);
    }
}
