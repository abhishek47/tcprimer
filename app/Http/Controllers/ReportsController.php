<?php

namespace App\Http\Controllers;

use App\Vehicle;
use Illuminate\Http\Request;

class ReportsController extends Controller
{
    

    public function speed(Vehicle $vehicle)
    {
    	return view('vehicles.reports.speed', compact('vehicle'));
    }


    public function fuel(Vehicle $vehicle)
    {
    	return view('vehicles.reports.fuel', compact('vehicle'));
    }

}
