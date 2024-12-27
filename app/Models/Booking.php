<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $table = 'bookings';

    protected $fillable = [
        'event',
        'notes',
        'desiredTime',
        'start_time',
        'end_time',
        'user_id',
        'auditoriums_id'
    ];

    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Auditorium()
    {
        return $this->belongsTo(Auditorium::class);
    }
}
