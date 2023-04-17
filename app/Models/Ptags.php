<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ptags extends Model
{
    use HasFactory;

    public function portfolioiTags(){
        return $this->belongsTo(Portfolio::class);
    }

    public function tagsName(){
        return $this->belongsTo(Tag::class, 'name', 'id');
    }


}
