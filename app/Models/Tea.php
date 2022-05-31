<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tea extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 
        'image',
        'description',
        'keywords',
        'origin',
        'brew_time',
        'temperature'
    ];
}