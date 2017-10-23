<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConsignmentsController extends Controller
{
    public function index()
    {
    	return view('consignments.index');
    }
}
