<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'booking_id',
        'amount',
        'payment_status',
        'transaction_id',
        'payment_date'
    ];
}
