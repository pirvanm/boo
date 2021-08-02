<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = [
    	'date',
    	'start_time',
    	'end_time',
    	'client_name',
    	'client_email'
    ];

    protected $casts = [
    	'data' => 'datetime',
    	'start_time' => 'datetime',
    	'end_time' => 'datetime'
    	]
}
