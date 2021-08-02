<?php

namespace App\Http\Controllers;

use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __invoke () {

    	$schedule = Schedule::find(2);
    	$service = Service::find(2);

    	$appointments = Appointment::whereDate('date','2021-05-30')
    	->get();

    	dd($appointments);

	// use this to about dry and "spaghety code in controller "

    	$slots = (new TimeSlotGenerator($schedule , $service))
    	->applyFilters (
    		new SlotsPassedTodayFilter(),
    		new UnavailabilityFilter($schedule->unavailabilities),
    		new AppointmentFilter()
    		])
    	->get();

    	return view('bookings.create', [
    		'slots' => $slots])

    }
}
