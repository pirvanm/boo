<?php 



namespace App\Bookings;


use Carbon\CarbonPeriod;
use App\Bookings\TimeSlotGenerator;


interface Filter {
	public function apply(TimeSlot Generator $generator, CarbonPeriod $interval)
}