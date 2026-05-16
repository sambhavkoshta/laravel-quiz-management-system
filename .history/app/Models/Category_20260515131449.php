<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App

class Category extends Model
{
    function quizzes(){
        return $this->hasMany(Quiz::class);
    }
    use HasFactory;
}
