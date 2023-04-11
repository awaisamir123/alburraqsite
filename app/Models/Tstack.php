<?php

namespace App\Models;

use App\Talent;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tstack extends Model
{
    use HasFactory;

    public function talentStack(){
        return $this->belongsTo(Talent::class);
    }
}
