<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class snacksGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'snacksGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
