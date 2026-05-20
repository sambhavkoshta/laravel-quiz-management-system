<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $fillable = [
        'username',
        'email',
        'password'
    ];

    function results()
    {
        return $this->hasMany(Result::class);
    }
    
    use HasFactory;
}
