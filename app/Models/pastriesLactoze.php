<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pastriesLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'pastriesLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
