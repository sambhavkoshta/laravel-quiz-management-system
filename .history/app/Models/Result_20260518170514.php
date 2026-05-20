<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = [
        'student_id',
        'quiz_id',
        'score',
        'total_questions'
    ];

    function student()
    {
        return $this->belongsTo(Student::class);
    }

    function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    
    use HasFactory;
}
