<?php

namespace App\Models;

use App\Portfolio;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptags extends Model
{
    use HasFactory;
    public function portfolioiTags(){
        return $this->belongsTo(Portfolio::class);
    }
}
