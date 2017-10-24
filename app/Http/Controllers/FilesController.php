<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilesController extends Controller
{
    public function store(Request $request)
    {
    	$document = File::fromFileAndVehicle($request->file('document'), $request->get('name'), $vehicle);

    	if($document->saveWithResponse())
    	{
    		return back();
    	} else {
    		return back()->withErrors();
    	}

    }


    public function destroy(Request $request, Document $document)
    {
    	$document->delete();
    	return back();
    }
}
