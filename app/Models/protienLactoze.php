<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protienLactoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'protienLactoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
