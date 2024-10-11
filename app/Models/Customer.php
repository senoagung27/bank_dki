<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $primaryKey = 'id';

    protected $guarded = [];

    protected $casts = [
        'created_at' => 'datetime:Y M d',
        'updated_at' => 'datetime:Y M d',

    ];

    // protected $fillable = [
    //     'name',
    //     'birth_place',
    //     'birth_date',
    //     'gender',
    //     'job_id',
    //     'address',
    //     'initial_deposit',
    //     'created_by',
    // ];

    public function job() {
        return $this->belongsTo(Job::class);
    }

    public function creator() {
        return $this->belongsTo(User::class, 'created_by');
    }

}
