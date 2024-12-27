<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auditorium extends Model
{
    protected $table = 'auditoriums';
    use HasFactory;
    protected $fillable = [
        'name',
        'capacity',
        'location',
        'description',
        'street',
        'user_id',
    ];


    public function Bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
