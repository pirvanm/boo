<?php 


namespace App\Filters\SlotPasses;

use App\Bookings\Filter;
use App\Bookings\TImeSlotGenerator;



class SlotsPassedTodayFilter implements  Filter 
{
	public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
	 {
	 	// define a clousoure 
	$interval->addFilter( function ($slot) use ($generator)  {
		if($generator->schedule->date->isToday()) {
				if($slot->lt(now())) {
					return false;
				}
		}


		return true;
	});	
	}
}