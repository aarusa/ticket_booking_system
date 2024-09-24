<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\FlightSchedule;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'user_id',
        'flight_id',
        'passenger_count',
        'total_price',
        'booking_date',
        'payment_status',
        'seat_class',
        'booking_status',
        'transaction_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function flightSchedule()
    {
        return $this->belongsTo(FlightSchedule::class, 'flight_id');
    }
}
