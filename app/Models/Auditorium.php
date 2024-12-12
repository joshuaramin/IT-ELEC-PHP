<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auditorium extends Model
{

    protected $fillable = [
        'capacity',
        'title',
        'location',
        'description'
    ];
}
