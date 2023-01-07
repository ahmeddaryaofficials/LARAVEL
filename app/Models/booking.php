<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class booking extends Model
{

    use HasFactory;
    protected $table ='booking_confirmation';
    protected $fillable =[
        'order_id',
        'cate_id',
        'user_id',
        'booking_date',
        'availibility',
    ];
}
