<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Emails extends Model
{
    use HasFactory;
    protected $fillable = [
        'first_name',
        'last_name',
        'company_name',
        'phone_number',
        'email',
        'message'
    ];
}
