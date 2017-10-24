@extends('layouts.app')


@section('content')

	<div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default waves-effect waves-light" >Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            
                        </div>

                        <h4 class="page-title">Staff &amp; Collaborators</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">People</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                   
                    <div class="col-sm-4">
                         <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-plus"></i> Add New Person</a>
                    </div>
                </div>

                <div class="row">

                  @foreach($people as $person)

                        <div class="col-sm-6 col-lg-3">
                            <div class="card-box">
                                <div class="contact-card">
                                    
                                    <div class="member-info" style="padding: 0;">
                                        <a href="/people/{{$person->id}}"><h4 class="m-t-0 m-b-5 header-title"><b>{{ $person->name }}</b></h4></a>
                                        <p class="text-muted">{{ $person->position }}</p>
                                        <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>{{ $person->city }} | {{ $person->phone }}</small></p>
                                      <!--  <div class="contact-action">
                                            <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                            <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                        </div> -->
                                    </div>

                                   
                                </div>
                            </div>

                        </div> <!-- end col -->

                    @endforeach


                   

                </div>

                

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add New Person</h4>
            <div class="custom-modal-text text-left">
                <form role="form" action="/people" method="POST"> 
                   {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" data-validation="required" name="name" id="name" placeholder="Enter name">
                    </div>
                    <div class="row">
                    <div class="form-group col-md-6">
                        <label for="name">Type</label>
                        <select name="type" class="form-control">
                            <option value="0">Individual</option>
                            <option value="1">Company</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="position">Designation</label>
                        <input type="text" class="form-control" data-validation="required"  name="position" id="position" placeholder="Enter post">
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="id_no">ID No. ( Driving License, Pan No. etc )</label>
                        <input type="text" class="form-control" name="id_no" id="id_no" placeholder="Enter ID no.">
                    </div>
                    <div class="form-group">
                        <label for="company">Phone Number</label>
                        <input type="text" class="form-control" data-validation="required" name="phone" id="phone" placeholder="Enter Phone Number">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control"  name="email" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Address</label>
                        <input type="text" class="form-control"  name="address" id="address" placeholder="Enter Address">
                    </div>

                     <div class="row">
                    <div class="form-group col-md-6">
                        <label for="city">City</label>
                        <input type="text" class="form-control" data-validation="required" name="city" id="city" placeholder="Enter City">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="state">State</label>
                        <input type="text" class="form-control" name="state" id="state" placeholder="Enter State">
                    </div>
                    </div>

                    <div class="row">
                    <div class="form-group col-md-6">
                      
                        <label for="country">Country</label>
                        <input type="email" class="form-control" name="country" id="country" value="India" placeholder="Enter Country" readonly="" ="">
                    </div>

                    <div class="form-group col-md-6">
                        <label for="pincode">Pincode</label>
                        <input type="text" class="form-control" name="pincode" id="pincode" placeholder="Enter Pincode">
                    </div>
                    </div>

                    <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                    <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                    <button type="close" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                    </div>
                    </div>
                    
                </form>
            </div>
        </div>


@endsection