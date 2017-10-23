<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Vehicle;

class VehiclesController extends Controller
{
    
    public function index()
    {
        $vehicles = auth()->user()->vehicles;
         
        return view('vehicles.index', compact('vehicles'));
    }


    public function store(Request $request)
    {
    	$this->validate($request, [
    			'name' => 'required|min:2',
    			'plate_no' => 'required|min:7',
    			'uniqid' => 'required|min:12',
    			'type' => 'required',
    			'fuel_type' => 'required',
                'high_speed' => 'required',

    		]);	


    	$vehicle = auth()->user()->vehicles()->create($request->all());

    	if($request->wantsJson())
    	{
    		return response([], 200);
    	}	

    	return redirect('/vehicles/' . $vehicle->uniqid);

    }


    public function show(Vehicle $vehicle)
    {
    	return view('vehicles.show', compact('vehicle'));
    }

    public function map(Vehicle $vehicle)
    {
        return view('vehicles.map', compact('vehicle'));
    }


    public function update(Request $request, Vehicle $vehicle)
    {
        $this->validate($request, [
                'name' => 'required|min:2',
                'plate_no' => 'required|min:7',
                'uniqid' => 'required|min:12',
                'type' => 'required',
                'fuel_type' => 'required',
                'high_speed' => 'required',

            ]); 


        $vehicle->update($request->all());

        if($request->wantsJson())
        {
            return response([], 200);
        }   

        return redirect('/vehicles/' . $vehicle->uniqid);

    }

 }   
