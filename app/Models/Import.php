<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'code',
        'name',
        'level1',
        'level2',
        'level3',
        'price',
        'price_sp',
        'quantity',
        'properties',
        'purchases',
        'image',
        'show',
        'description',
    ];



}
