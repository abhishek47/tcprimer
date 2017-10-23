<?php

namespace App\Http\Controllers;

use App\Document;
use App\Vehicle;
use App\Http\Requests\DocumentUploadRequest;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    
    public function index(Vehicle $vehicle)
    {
    	$vehicle->load('documents');

    	return view('vehicles.documents', compact('vehicle'));
    }


    public function store(DocumentUploadRequest $request, Vehicle $vehicle)
    {
    	$document = Document::fromFileAndVehicle($request->file('document'), $request->get('name'), $vehicle);

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
