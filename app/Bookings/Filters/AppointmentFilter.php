
<?php 


namespace App\Filters\SlotPasses;

use App\Bookings\Filter;
use App\Bookings\TImeSlotGenerator;



class AppointmentFilter implements  Filter 
{
	public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
	 {
	 	// define a clousoure 
	$interval->addFilter( function ($slot) use ($generator)  {
	

	});	
	}
}