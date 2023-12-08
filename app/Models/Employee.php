<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        'nic',
        'empl_name',
        'position',
        'joined_date',
        'address',
        'email',
        'telephone'
    ];
}
