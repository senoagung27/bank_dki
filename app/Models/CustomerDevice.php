<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerDevice extends Model
{
    use HasFactory;

    protected $table = 'customer_devices';

    protected $fillable = ['customer_id', 'device_id', 'expired_date'];
}
