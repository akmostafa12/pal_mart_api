<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vegetablesGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'vegetablesGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];

}
