<?php

namespace App\Http\Controllers;

use App\Person;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    public function index()
    {
    	$people = auth()->user()->people;
    	return view('people.index', compact('people'));
    }

    public function store(Request $request)
    {
    	$person = auth()->user()->people()->create($request->all());

    	return redirect('/people/' . $person->id);
    }

    public function show(Person $person)
    {
    	return view('people.show', compact('person'));
    }

    public function documents(Person $person)
    {
    	$person->load('documents');

    	return view('people.documents', compact('person'));
    }

    public function update(Request $request, Person $person)
    {
    	$person->update($request->all());

    	return back();
    }

}
