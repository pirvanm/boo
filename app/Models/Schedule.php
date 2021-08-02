<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $casts = [
    	'data' => 'datetime',
    	'start_time' => 'datetime',
    	'end_time' => 'datetime'
    ]
}
