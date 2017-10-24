@extends('layouts.app')





@section('content')
	
	       <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                 
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15 hidden-xs">
                            
                            
                        </div>
                        <ol class="breadcrumb hidden-xs">
                            <li>
                                <a href="/home">Home</a>
                            </li>
                            <li>
                                <a href="/people">People</a>
                            </li>
                            <li class="active">
                                {{ $person->name }}
                            </li>
                        </ol>
                        <h4 class="page-title large">{{ $person->name }} | {{ $person->position }} </h4>
                        
                    </div>
                </div>

                 <div class="row">
                    <div class="masonry-container">
                    <div class="col-lg-4">
                        <div class="portlet">
                            <div class="portlet-heading bg-default">
                                <h3 class="portlet-title text-dark">
                                   <i class="fa fa-bars"></i> Basic Details
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="fa fa-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#basic" class="" aria-expanded="true"><i class="fa fa-minus"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="basic" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="portlet-body">
                                    <div class="row">
                                    <div class="col-md-6">
                                     <p><b class="text-dark"> Name : </b> {{ $person->name }}</p> 
                                    </div>

                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Type : </b> {{ $person->type == 0 ?  'Individual' : 'Company'}}</p>
                                    </div>

                                    <div class="col-md-6">
                                      <p><b class="text-dark"> Phone No. : </b> {{ $person->phone }} </p> 
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> ID No. : </b> {{ $person->id_no }}</p>
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> City : </b> {{ $person->city }}</p>
                                    </div>
                                    </div>
                                    
                                    <p><b class="text-dark">Address : </b></p>
                                    {{ $person->address }} | {{ $person->pincode }}
                                    <br><br>
                                 
	               				 	 
                                    <button type="button" data-toggle="modal" data-target="#editVehicleModal" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i> Edit Details</button>

                                    <a href="/people/{{$person->id}}/documents" class="btn btn-purple btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-book"></i> Documents</a>

                                 
                                </div>
                            </div>
                        </div>
                    </div>


        



                   


              
                  </div>
            </div>
        </div>


      <div id="editVehicleModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 class="modal-title"><b>Edit Details</b></h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('people.update', ['person' => $person]) }}">

                                            {{ csrf_field() }}

                                            {{ method_field('patch') }}
                                            <div class="row">
                                                <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" id="name" value="{{ $person->name }}" placeholder="Enter name">
                    </div>  
                                      <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="name">Type</label>
                                            <select name="type" class="form-control">
                                                <option value="0" {{ $person->type == 0 ?  'selected' : ''}}>Individual</option>
                                                <option value="1" {{ $person->type == 1 ?  'selected' : ''}}>Company</option>
                                            </select>
                                        </div>
                                        <div class="form-group  col-md-6">
                                            <label for="position">Designation</label>
                                            <input type="text" class="form-control" value="{{ $person->position }}" name="position" id="position" placeholder="Enter post">
                                        </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="id_no">ID No. ( Driving License, Pan No. etc )</label>
                                            <input type="text" class="form-control" value="{{ $person->id_no }}" name="id_no" id="id_no" placeholder="Enter ID no.">
                                        </div>
                                        <div class="form-group">
                                            <label for="company">Phone Number</label>
                                            <input type="text" class="form-control" value="{{ $person->phone }}" name="phone" id="phone" placeholder="Enter Phone Number">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email address</label>
                                            <input type="email" class="form-control" value="{{ $person->email }}" name="email" id="exampleInputEmail1" placeholder="Enter email">
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Address</label>
                                            <input type="text" class="form-control" value="{{ $person->address }}" name="address" id="address" placeholder="Enter Address">
                                        </div>

                                         <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">City</label>
                                            <input type="text" class="form-control" value="{{ $person->city }}" name="city" id="city" placeholder="Enter City">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="city">State</label>
                                            <input type="text" class="form-control" value="{{ $person->state }}" name="state" id="state" placeholder="Enter State">
                                        </div>
                                        </div>

                                         <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="country">Country</label>
                                            <input type="text" class="form-control" value="{{ $person->country }}"  name="country" id="country" value="India" placeholder="Enter Country" disabled="">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="pincode">Pincode</label>
                                            <input type="text" class="form-control" value="{{ $person->pincode }}" name="pincode" id="pincode" placeholder="Enter Pincode">
                                        </div>
                                        </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Update Details</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>


 

@endsection

