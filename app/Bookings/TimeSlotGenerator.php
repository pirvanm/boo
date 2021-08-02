<?php 
namespace App\Bookings;


use Carbon\CarbonInterval;
class TimeSlotGenerator {

	protected $interval;

	public function __construct(Schedule $schedule) {
		//show by start and end date
    	$this->interval = CarbonInterval::minutes(15)
    	->toPeriod(
    		$schedule->date->setTimeFrom($schedule->start_time),
    		$schedule->date->setTimeFrom($schedule->end_time);

	}
	// use this to about dry and "spaghety code in controller "
}