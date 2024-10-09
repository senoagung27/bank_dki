<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupSensor extends Model
{
    use HasFactory;

    protected $table = 'groups';

    protected $guarded = ['*'];
}
