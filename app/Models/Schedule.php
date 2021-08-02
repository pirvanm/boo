<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\ScheduleUnavailability;

class Schedule extends Model
{
    use HasFactory;

    protected $casts = [
    	'data' => 'datetime',
    	'start_time' => 'datetime',
    	'end_time' => 'datetime'
    ];


    public function unvailablities() {
    	return $this->hasMany(ScheduleUnavailability::class);
    }
}
