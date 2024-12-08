<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $table = 'destination';
    protected $fillable = [
        'name',
        'description',
        'city',
        'state'
    ];


    use HasFactory;
}
