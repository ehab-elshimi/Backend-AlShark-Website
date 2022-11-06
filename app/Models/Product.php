<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'session',
        'name',
        'image',
        'desc',
        'application',
        'main-components',
        'blends-with',
        'cautions',
        'cas-tsca',
        'cas-eninces'
    ];
}
