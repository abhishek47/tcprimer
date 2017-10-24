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
                                <a href="/customers">Customers</a>
                            </li>
                            <li class="active">
                                {{ $customer->name }}
                            </li>
                        </ol>
                        <h4 class="page-title large">{{ $customer->name }} | {{ $customer->category }} </h4>
                        
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
                                     <p><b class="text-dark"> Name : </b> {{ $customer->name }}</p> 
                                    </div>

                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Category : </b> {{ $customer->category }}</p>
                                    </div>

                                    <div class="col-md-6">
                                      <p><b class="text-dark"> Phone No. : </b> {{ $customer->phone1 }} </p> 
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Alternate No. : </b> {{ $customer->phone2 }}</p>
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> City : </b> {{ $customer->city }}</p>
                                    </div>
                                    </div>
                                    
                                    <p><b class="text-dark">Address : </b></p>
                                    {{ $customer->address }} | {{ $customer->pincode }}
                                    <br><br>
                                 
                                     
                                    <button type="button" data-toggle="modal" data-target="#editVehicleModal" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i> Edit Details</button>

                                    <a href="/customers/{{$customer->id}}/documents" class="btn btn-purple btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-book"></i> Documents</a>

                                 
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
                                            <form method="POST" action="{{ route('customers.update', ['customer' => $customer]) }}">

                                            {{ csrf_field() }}

                                            {{ method_field('patch') }}
                                            <div class="form-group">
                                                <label for="name">Name</label>
                                                <input type="text" class="form-control" value="{{ $customer->name }}" data-validation="required" name="name" id="name" placeholder="Enter name">
                                            </div>
                                            
                                            <div class="form-group">
                                                <label for="category">Category</label>
                                                <input type="text" class="form-control" value="{{ $customer->category }}" data-validation="required"  name="category" id="category" placeholder="Enter category">
                                            </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="company">Phone Number 1</label>
                                            <input type="text" class="form-control" value="{{ $customer->phone1 }}" data-validation="required" name="phone1" id="phone1" placeholder="Enter Phone Number">
                                        </div>

                                        <div class="form-group col-md-6">
                                            <label for="company">Phone Number 2</label>
                                            <input type="text" class="form-control" value="{{ $customer->phone2 }}" data-validation="required" name="phone2" id="phone2" placeholder="Enter Alternative Phone Number">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" value="{{ $customer->email }}"  name="email" id="exampleInputEmail1" placeholder="Enter email">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Address</label>
                                        <input type="text" class="form-control" value="{{ $customer->address }}" name="address" id="address" placeholder="Enter Address">
                                    </div>

                                     <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="city">City</label>
                                        <input type="text" class="form-control" value="{{ $customer->city }}" data-validation="required" name="city" id="city" placeholder="Enter City">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="state">State</label>
                                        <input type="text" class="form-control" value="{{ $customer->state }}" name="state" id="state" placeholder="Enter State">
                                    </div>
                                    </div>

                                    <div class="row">
                                    <div class="form-group col-md-6">
                                      
                                        <label for="country">Country</label>
                                        <input type="text" class="form-control" value="{{ $customer->country }}" name="country" id="country" value="India" placeholder="Enter Country" readonly="" ="">
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="pincode">Pincode</label>
                                        <input type="text" class="form-control" name="pincode" value="{{ $customer->pincode }}" id="pincode" placeholder="Enter Pincode">
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

