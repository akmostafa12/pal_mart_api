<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iceCreamLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'iceCreamLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
