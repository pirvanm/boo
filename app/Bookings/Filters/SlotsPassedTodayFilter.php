<?php 


namespace App\Filters\SlotPasses;

use App\Bookings\Filter;
use App\Bookings\TImeSlotGenerator;



class SlotsPassedTodayFilter implements  Filter 
{
	public function apply(TImeSlotGenerator $generator, CarbonPeriod $interval) {
		dd('filter');
	}
}