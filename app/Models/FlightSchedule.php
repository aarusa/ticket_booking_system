<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Booking;

class FlightSchedule extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'flight_number',
        'airline_name',
        'origin_airport',
        'destination_airport',
        'date',
        'time',
        'duration',
        'available_seats',
        'price',
        'status',
        'baggage_allowance'
    ];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
