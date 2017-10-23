<?php


function getFuelType($type)
{
	switch ($type) {
		case 0:
			return 'Petrol';
		case 1:
			return 'Diesel';
		case 2:
			return 'CNG';
		
	}


}


function getDatesFromCreated($created)
{
	

	$dates = [];

	$begin = new DateTime( $created );
	$end = new DateTime();
	//$end = $end->modify( '-1 days' ); 

	$interval = new DateInterval('P1D');
	$daterange = new DatePeriod($begin, $interval ,$end);

	foreach($daterange as $date){
	   $dates[] = $date->format("Y-m-d");
	}

	Debugbar::info($dates);

	return $dates;

	
}