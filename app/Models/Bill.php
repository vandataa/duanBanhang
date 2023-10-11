<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    protected $fillable = [
        'billcode',
        'id_user',
        'address' ,
        'name',
        'email',
        'phone',
        'cart_bill',
        'paymain',
        'date',
        'status',
        'total'
    ];
}
