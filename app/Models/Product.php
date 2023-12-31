<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'description',
        'thunm',
        'galery',
        'productCode',
        'inventory',
        'regularPrice',
        'SKU',
        'discount',
        
        'video',
        'categories',
    ];
}
