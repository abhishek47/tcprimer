@extends('layouts.app')


@section('css')
	
	<link rel="stylesheet" href="/css/speedometer.css">
	



@endsection


@section('content')
	
	       <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                 
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15 hidden-xs">
                            <button type="button" class="btn btn-techno  waves-effect waves-light" data-toggle="modal" data-target="#newVehicleModal" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>

                            
                        </div>
                        <ol class="breadcrumb hidden-xs">
                            <li>
                                <a href="/home">Home</a>
                            </li>
                            <li>
                                <a href="#">Vehicles</a>
                            </li>
                            <li class="active">
                                {{ $vehicle->name }}
                            </li>
                        </ol>
                        <h4 class="page-title large">{{ $vehicle->name }} : {{ $vehicle->plate_no }} <span id="vehicle-status" class="text-danger"></span></h4>
                        
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
                                     <p><b class="text-dark"> Name : </b> {{ $vehicle->name }}</p> 
                                    </div>

                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Model : </b> {{ $vehicle->type }}</p>
                                    </div>

                                    <div class="col-md-6">
                                      <p><b class="text-dark"> Plate No : </b> {{ $vehicle->plate_no }} </p> 
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Unique ID : </b> {{ $vehicle->uniqid }}</p>
                                      <input type="hidden" id="uniqid" value="{{ substr($vehicle->uniqid, 2)   }}">
                                    </div>
                                    <div class="col-md-6">
                                      <p> <b class="text-dark"> Max Speed : </b> {{ $vehicle->high_speed }} Km/h</p>
                                    </div>
                                    </div>
                                    
                                    <p><b class="text-dark">Description : </b></p>
                                    {{ $vehicle->description }}
                                    <br><br>
                                 
	               				 	 
                                    <button type="button" data-toggle="modal" data-target="#editVehicleModal" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-edit"></i> Edit Details</button>

                                    <a href="/vehicles/{{$vehicle->uniqid}}/documents" class="btn btn-purple btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-book"></i> Documents</a>

                                 
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col-lg-4">
                        <div class="portlet">
                            <div class="portlet-heading bg-default">
                                <h3 class="portlet-title text-dark">
                                   <i class="fa fa-tachometer"></i> Speedometer <small id="speed-time">3 minutes ago</small>
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="fa fa-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#speed" class="" aria-expanded="true"><i class="fa fa-minus"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="speed" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="portlet-body">



                                    	<input id="speedometer" type="hidden"  value="20">

                                    	<br><br>

                                 

	               				 	 
                                    <a href="/vehicles/{{$vehicle->uniqid}}/reports/speed" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-line-chart"></i> Reports</a>

  										

                                </div>
                            </div>
                        </div>
                    </div>




                  <!--  <div class="col-lg-4">
                        <div class="portlet">
                            <div class="portlet-heading bg-default">
                                <h3 class="portlet-title text-dark">
                                    <i class="fa fa-tint"></i> Fuel Meter <small id="fuel-time">3 minutes ago</small>
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="fa fa-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#fuel" class="" aria-expanded="true"><i class="fa fa-minus"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="fuel" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="portlet-body">
                                
                                    		<span id="fuelGaugeContainer"></span>
                                    	

                                   

                                    <br>

                                  


	               				 	 
                                    <a href="/vehicles/{{$vehicle->uniqid}}/reports/fuel" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-line-chart"></i> Reports</a>
                                   
                                </div>
                            </div>
                        </div>
                    </div> -->

                  <div class="col-lg-4">
                        <div class="portlet">
                            <div class="portlet-heading bg-default">
                                <h3 class="portlet-title text-dark">
                                    <i class="fa fa-tint"></i> Locate Vehicle <small id="loc-time">3 minutes ago</small>
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="fa fa-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#fuel" class="" aria-expanded="true"><i class="fa fa-minus"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="fuel" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="portlet-body">
                                     <div id="gmaps-basic" class="gmaps"></div>

                                     <br>

                                    
	               				 	 
                                    <button type="button" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-line-chart"></i> Reports</button>
                                    <a href="/vehicles/{{$vehicle->uniqid}}/map" class="btn btn-purple btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-map"></i> Fullscreen</a>

                                   
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--  <div class="col-lg-4">
                        <div class="portlet">
                            <div class="portlet-heading bg-default">
                                <h3 class="portlet-title text-dark">
                                    <i class="fa fa-tint"></i> Statistics <small id="stats-time">3 minutes ago</small>
                                </h3>
                                <div class="portlet-widgets">
                                    <a href="javascript:;" data-toggle="reload"><i class="fa fa-refresh"></i></a>
                                    <span class="divider"></span>
                                    <a data-toggle="collapse" data-parent="#accordion1" href="#fuel" class="" aria-expanded="true"><i class="fa fa-minus"></i></a>
                                    <span class="divider"></span>
                                    <a href="#" data-toggle="remove"><i class="fa fa-close"></i></a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div id="fuel" class="panel-collapse collapse in" aria-expanded="true">
                                <div class="portlet-body">

                                	<strong class="text-dark" style="font-size: 20px;">Water Level</strong>

                                	

                                	 <div class="progress progress-lg m-b-5">
                                        <div class="progress-bar progress-bar-purple" id="water-level" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 96%;">
                                            96%
                                        </div>
                                    </div>


                                	<strong class="text-dark" style="margin-bottom: 5px;font-size: 20px;">Oil Level</strong>



                                	 <div class="progress progress-lg m-b-5">
                                        <div class="progress-bar progress-bar-success" id="oil-level" role="progressbar" aria-valuenow="96" aria-valuemin="0" aria-valuemax="100" style="width: 54%;">
                                            54%
                                        </div>
                                    </div>

                                    <br>

                                    
	               				 	 
                                    <button type="button" class="btn btn-default btn-custom btn-rounded waves-effect waves-light"><i class="fa fa-line-chart"></i> Reports</button>
                                   
                                </div>
                            </div>
                        </div>
                    </div>  -->


                   


              
                  </div>
            </div>
        </div>




        <div id="editVehicleModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 class="modal-title"><b>Edit Vehicle</b></h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('vehicles.update', ['vehicle' => $vehicle]) }}">

                                            {{ csrf_field() }}

                                            {{ method_field('patch') }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                        <label for="field-1" class="control-label">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" 
                                                          value="{{ old('name') ? old('name') : $vehicle->name }}" placeholder="Ex. Suzuki Ciaz">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">Type</label>
                                                        <input type="text" class="form-control" 
                                                        value="{{ old('type') ? old('type') : $vehicle->type }}" id="type" name="type" placeholder="Ex. Sedan Car">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('fuel_type') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">Fuel Type</label>
                                                        <select class="form-control" name="fuel_type" id="fuel_type">
                                                          @if(old('fuel_type'))
                                                            <option value="0" {{ old('fuel_type') == 0 ? 'selected' : '' }}>Petrol</option>
                                                            <option value="1" {{ old('fuel_type') == 1 ? 'selected' : '' }}>Deisel</option>
                                                            <option value="2" {{ old('fuel_type') == 2 ? 'selected' : '' }}>CNG</option>
                                                          @else
                                                          	<option value="0" {{ $vehicle->fuel_type == 0 ? 'selected' : '' }}>Petrol</option>
                                                            <option value="1" {{ $vehicle->fuel_type == 1 ? 'selected' : '' }}>Deisel</option>
                                                            <option value="2" {{ $vehicle->fuel_type == 2 ? 'selected' : '' }}>CNG</option>

                                                          @endif  
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('high_speed') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">High Speed</label>
                                                        <input type="text" class="form-control" 
                                                        value="{{ old('high_speed') ? old('high_speed') : $vehicle->high_speed  }}" id="high_speed" name="high_speed" placeholder="The highest speed the vehicle can take in Km/h Ex. 180">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group {{ $errors->has('uniqid') ? 'has-error' : '' }}">
                                                        <label for="field-3" class="control-label">Unique Id</label>
                                                        <input type="text" value="{{ old('uniqid') ? old('uniqid') : $vehicle->uniqid }}" class="form-control" id="uniqid" name="uniqid" placeholder="Ex. TC9922367414">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group {{ $errors->has('plate_no') ? 'has-error' : '' }}">
                                                        <label for="field-4" class="control-label">Vehicle No.</label>
                                                        <input type="text" value="{{ old('plate_no') ? old('plate_no') : $vehicle->plate_no }}" class="form-control" id="plate_no" name="plate_no" placeholder="Ex. MH 15 FF 9444">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin {{ $errors->has('description') ? 'has-error' : '' }}>
                                                        <label for="field-7" class="control-label">Describe Your Vehicle</label>
                                                        <textarea class="form-control autogrow" id="description" name="description" placeholder="Any additional info about the vehicle" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">{{ old('description') ? old('description') : $vehicle->description }}</textarea>
                                                    </div>
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

@section('js')
	   
	<script type="text/javascript" src="/js/speedometer.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/d3/3.4.13/d3.min.js"></script>

	<script type="text/javascript" src="/js/fuelbar.js"></script>

	 <!-- google maps api -->
       <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAu6Sb4PjlovzWwseUrvAKFlu2gzuE3i1E&libraries=drawing,places,geometry"></script>
        <!-- main file -->
        <script src="/js/gmaps.min.js"></script>
        <!-- demo codes -->
        <script src="/js/jquery.gmaps.js"></script>

        <script type="text/javascript" src="/js/plotLocation.js"></script>

	    <script type="text/javascript">


	     @if($errors->any())
            
                $('#editVehicleModal').modal();
            
            @endif

	    		

	        function setSpeed(val) {
			     $('#speedometer').val(val)
			                 .trigger('change');



			   }
           

            $(window).load(function(){

            	$("#speedometer").myfunc({divFact:10, maxVal: {{ $vehicle->high_speed }} });

            	initializeFuelBar();



                var $container = $('.masonry-container');
                $container.isotope({
                    filter: '*'
                });




        		initializeMap();

               

            });

            var speedings = firebase.database().ref('users/' + $('#uniqid').val() + '/locations');
			speedings.limitToLast(1).on('child_added', function(snapshot) {

				startTime = moment().format('MMMM Do YYYY, h:mm:ss a');
			  
			    var time = moment(snapshot.val().created_at);
			    var seconds = time.diffSecs();

			    console.log(seconds);

			    if(seconds > 2 || snapshot.val().speed < 5)
			    {
			    	 setSpeed(snapshot.val().speed);
			    	 setTimeout(function(){
			    	 	setSpeed(0)
			    	 }, 1000);
			    	 $('#vehicle-status').html('<span class="text-danger"><i class="fa fa-circle"></i> Parked</span>');
		    	} 
		    	else {

		    		  setSpeed({{ $vehicle->high_speed }});
			    	 setTimeout(function() {
			    	 	 setSpeed(snapshot.val().speed);
			    	 }, 1000);
		    		
		    		 $('#vehicle-status').html('<span class="text-success"><i class="fa fa-car"></i> In Transit</span>');
		    	
		    	}

			   
			    $('#speed-time').html(time.fromNow());
			});	
            
            var readings = firebase.database().ref('users/' + $('#uniqid').val() + '/readings');
			readings.limitToLast(1).on('child_added', function(snapshot) {
				console.log(snapshot.val());
			   updateFuelBar(snapshot.val().fuel);
			   $('#fuel-time').html(moment(snapshot.val().created_at).fromNow());

			   $('#water-level').css('width', snapshot.val().water+'%').attr('aria-valuenow', snapshot.val().water);
			   $('#water-level').html(snapshot.val().water+'%');
			   $('#oil-level').css('width', snapshot.val().oil+'%').attr('aria-valuenow', snapshot.val().oil);
			   $('#oil-level').html(snapshot.val().oil+'%');
			   $('#stats-time').html(moment(snapshot.val().created_at).fromNow());

			});
     
    </script>            


@endsection