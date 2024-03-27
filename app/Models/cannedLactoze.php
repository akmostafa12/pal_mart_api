<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cannedLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'cannedLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
