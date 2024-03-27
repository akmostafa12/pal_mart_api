<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class iceCreamGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'iceCreamGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
