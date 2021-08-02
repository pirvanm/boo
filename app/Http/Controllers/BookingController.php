<?php

namespace App\Http\Controllers;

use Carbon\CarbonInterval;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function __invoke () {


    	$slots = CarbonInterval::minutes(15)
    	->toPerios(now(), now()->addDay());

    	dd($slots);
    	return view('bookings.create')

    }
}
