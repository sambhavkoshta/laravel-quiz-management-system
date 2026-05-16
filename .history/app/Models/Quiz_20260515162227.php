<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Quiz extends Model
{
    function categories(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    function mcqs(){
        return $this->hasMany(Mcqs::class)
    }
    use HasFactory;
}
