<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Edase extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'cargo',
        'phone',
        'photo',
    ];
}
