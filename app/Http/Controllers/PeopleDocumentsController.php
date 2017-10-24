<?php

namespace App\Http\Controllers;

use App\Person;
use App\PeopleDocument;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentUploadRequest;

class PeopleDocumentsController extends Controller
{
     public function index(Person $person)
    {
    	$person->load('documents');

    	return view('people.documents', compact('person'));
    }


    public function store(DocumentUploadRequest $request, Person $person)
    {
    	$document = PeopleDocument::fromFileAndPerson($request->file('document'), $request->get('name'), $person);

    	if($document->saveWithResponse())
    	{
    		return back();
    	} else {
    		return back()->withErrors();
    	}

    }


    public function destroy(Request $request, PeopleDocument $document)
    {
    	$document->delete();
    	return back();
    }
}
