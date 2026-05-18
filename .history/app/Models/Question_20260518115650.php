<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App

class Question extends Model
{
    function  options(){
        return $this->hasMany(Options::class);
    }
    use HasFactory;
}
