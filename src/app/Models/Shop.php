<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Shop extends Model
{
    use HasFactory;

    protected $guarded = [
        'shopid',
        'shopname',
        'area',
        'category',
        'read',
        'image',
    ];
}
