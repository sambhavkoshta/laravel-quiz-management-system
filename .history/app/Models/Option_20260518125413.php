<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = [
        'mcq_id',
        'option_text',
        'is_correct'
    ];
    
    function mcq(){
        return $this->belongsTo(Mcqs::class);
    }
    use HasFactory;
}
