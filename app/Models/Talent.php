<?php

namespace App\Models;

use App\Models\Tstack;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    use HasFactory;
    protected $table = 'talents';
    //
    public function stacks(){
        return $this->hasMany(Tstack::class);
    }
}
