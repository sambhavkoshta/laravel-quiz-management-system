<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    public options(){
        return $this->hasMany(Options::class);
    }
    use HasFactory;
}
