<?php

namespace App\Http\Controllers;

use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __invoke () {

    	$schedule = Schedule::find(2);

//show by start and end date
    	$slots = CarbonInterval::minutes(15)
    	->toPeriod(
    		$schedule->date->setTimeFrom($schedule->start_time),
    		$schedule->date->setTimeFrom($schedule->end_time);


    	return view('bookings.create', [
    		'slots' => $slots])

    }
}
