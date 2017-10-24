<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function index()
    {
    	$customers = auth()->user()->customers;
    	return view('customers.index', compact('customers'));
    }

    public function store(Request $request)
    {
    	$customer = auth()->user()->customers()->create($request->all());

    	return redirect('/customers/' . $customer->id);
    }

    public function show(Customer $customer)
    {
    	return view('customers.show', compact('customer'));
    }

    public function documents(Customer $customer)
    {
    	$customer->load('documents');

    	return view('customers.documents', compact('customer'));
    }

    public function update(Request $request, Customer $customer)
    {
    	$customer->update($request->all());

    	return back();
    }
}
