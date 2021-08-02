<?php 


namespace App\Filters\SlotPasses;

use App\Bookings\Filter;
use App\Bookings\TImeSlotGenerator;



class SlotsPassedTodayFilter implements  Filter 
{
	public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
	 {
	 	// define a clousoure 
	$interval->addFilter( function () {
		return true;
	});	
	}
}