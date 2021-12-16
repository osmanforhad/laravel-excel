<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExcelExample extends Model
{
    use HasFactory;
    protected $table = 'excleexamples';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'category',
        'image',
        'brand',
        'quantity',
        'details'
    ];
}
