<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;
class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'session',
        'name',
        'image',
        'desc',
        'application',
        'components',
        'blends_with',
        'cautions',
        'msds',
        'specs'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'category_products');
    }
}
