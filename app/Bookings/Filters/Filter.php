<?php 

interface Filter {
	public function apply(TimeSlot Generator $generator, Carbon $interval)
}