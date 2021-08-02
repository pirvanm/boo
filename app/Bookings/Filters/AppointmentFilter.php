
<?php 


namespace App\Filters\SlotPasses;

use App\Bookings\Filter;
use Illuminate\Support\Collection;
use App\Bookings\TimeSlotGenerator;




class AppointmentFilter implements  Filter 
{
	public $appointments; 

	public function __construct(Colllection $appointments) {
		$this->appointments = $appointments;
	}

	public function apply(TimeSlotGenerator $generator, CarbonPeriod $interval)
	 {
	 	// define a clousoure 
	$interval->addFilter( function ($slot) use ($generator)  {
	

	});	
	}
}