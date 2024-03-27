<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class protienGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'protienGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
