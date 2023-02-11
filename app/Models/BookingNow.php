<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookingNow extends Model
{
    use HasFactory;
    protected $fillable =[
        'book_id',
        'ven_id',
        'user_id',
        'booking_date',
    ];
}
