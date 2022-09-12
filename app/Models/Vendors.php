<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vendors extends Model
{
    use HasFactory;
    protected $table ='vendors';
    protected $fillable =[
        'cate_id',
        'vendor_name',
        'vendor_username',
        'vendor_password',
        'small_descrip',
        'description',
        'original_price',
        'selling_price',
        'status',
        'min',
        'max',
        'locaation',
        'image',
        'trending',
        'meta_title',
        'meta_descrip',
        'meta_keywords',
    ];
}
