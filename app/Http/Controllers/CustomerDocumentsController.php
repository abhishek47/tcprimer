<?php

namespace App\Http\Controllers;

use App\Customer;
use App\CustomerDocument;
use Illuminate\Http\Request;
use App\Http\Requests\DocumentUploadRequest;

class CustomerDocumentsController extends Controller
{
    public function index(Customer $customer)
    {
    	$customer->load('documents');

    	return view('customers.documents', compact('customer'));
    }


    public function store(DocumentUploadRequest $request, Customer $customer)
    {
    	$document = CustomerDocument::fromFileAndCustomer($request->file('document'), $request->get('name'), $customer);

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
