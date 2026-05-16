<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\M

class Quiz extends Model
{
    function categories(){
        return $this->belongsTo(Category::class);
    }
    use HasFactory;
}
