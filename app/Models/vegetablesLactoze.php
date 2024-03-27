<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class vegetablesLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'vegetablesLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
