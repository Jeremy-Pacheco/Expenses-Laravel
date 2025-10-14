<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Enloquent\Factories\HasFactory;

class Expense extends Model
{
    // use HasFactory;

    protected $fillable = [
        'category',
        'mount',
        'description',
        'purchase_date',
    ];
}
