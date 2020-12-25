<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'product_id',
        'name',
        'booking_date',
        'count_days',
        'email',
        'phone',
        'comment'
    ];
}
