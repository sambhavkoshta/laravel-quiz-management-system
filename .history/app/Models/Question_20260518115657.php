<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Option;

class Question extends Model
{
    function  options(){
        return $this->hasMany(Options::class);
    }
    use HasFactory;
}
