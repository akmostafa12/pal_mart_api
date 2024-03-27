<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffeeLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'coffeeLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
    
}
