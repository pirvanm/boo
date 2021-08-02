<?php 
namespace App\Bookings;

use App\Modes\Schedule;
use App\Modes\Service;
use Carbon\CarbonInterval;
class TimeSlotGenerator {

	public const INCREMENT = 15;

	protected $interval;

	public function __construct(Schedule $schedule, Service $service) {
		//show by start and end date
    	$this->interval = CarbonInterval::minutes(self::INCREMENT)
    	->toPeriod(
    		$schedule->date->setTimeFrom($schedule->start_time),
    		$schedule->date->setTimeFrom($schedule->end_time);

	}

	public function applyFilters(array $filters) 
	{
		// iterate to each filters 
		foreach ($filters  as  $filter)  {
			// define why we filter 
			if(!$filter instanceof Filter){
				continue;
			}

			$filter->apply($this, $interval);
			
		}

	
	}

	public function get () {
		return $this->interval;
	}

}