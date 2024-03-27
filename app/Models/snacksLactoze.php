<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class snacksLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'snacksLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
    
}
