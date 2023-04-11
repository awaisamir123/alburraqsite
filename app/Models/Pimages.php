<?php

namespace App\Models;

use App\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pimages extends Model
{
    use HasFactory;
    public function portfolioImages(){
        return $this->belongsTo(Portfolio::class);
    }
}
