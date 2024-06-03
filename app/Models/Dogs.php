<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dogs extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'breed',
        'age',
        'size',
        'color',
        'height',
        'weight'

    ];
}
