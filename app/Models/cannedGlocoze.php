<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cannedGlocoze extends Model
{
    use HasFactory;
    public $timestamps = false;
    public $table = 'cannedGlocoze';
    protected $fillable = [
        'image',
        'name',
        'price',
        'cazeon',
    ];
}
