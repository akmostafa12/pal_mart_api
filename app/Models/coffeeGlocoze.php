<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffeeGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'coffeeGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
