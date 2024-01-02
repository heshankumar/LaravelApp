<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderItem extends Model
{
<<<<<<< HEAD
    
=======
>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
    use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'total_cost'
    ];
<<<<<<< HEAD
=======

>>>>>>> 51aa26922c21590e886db36ba53e476e5eb8cdc1
}
