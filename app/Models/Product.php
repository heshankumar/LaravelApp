<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // public $table = 'products';
    use HasFactory;

    protected $fillable = [
        'product_name',
        'manufacturer',
        'qty',
        'unit_price',
        'supllier_id',
        'type',
        'description',
        'image'
    ];
}
