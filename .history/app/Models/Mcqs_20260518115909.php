<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcqs extends Model
{
    function quizzes(){
        return $this->belongsTo(Quiz::class,'quiz_id');
    }

    function question(){
        return $this->hasMany(Question::class);
    }
    use HasFactory;
}
