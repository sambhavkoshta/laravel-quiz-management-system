<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mcqs extends Model
{
    protected $fillable = [
        'quiz_id',
        'question'
    ];

    function quizzes(){
        return $this->belongsTo(Quiz::class,'quiz_id');
    }

    function options(){
        return $this->hasMany(Option::class, 'mcq_id');
    }
    use HasFactory;
}
