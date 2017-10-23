@extends('layouts.app')

@section('content')
  

        <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row hidden-xs">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default  waves-effect waves-light" data-toggle="modal" data-target="#newVehicleModal" aria-expanded="false">Connect Vehicle <span class="m-l-5"><i class="fa fa-car"></i></span></button>

                            
                        </div>
                        <h4 class="page-title">Connected Vehicles</h4>
                        <p class="text-muted page-title-alt">Welcome to TechnoCoup admin panel !</p>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-8">
                        <form role="form">
                            <div class="form-group contact-search m-b-30">
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-md-4">
                        
                        <div class="h5 m-0">
                            <span class="vertical-middle">Sort By:</span>
                            <div class="btn-group vertical-middle" data-toggle="buttons">
                                 <label class="btn btn-white btn-md waves-effect active">
                                    <input type="checkbox" autocomplete="off" checked> Status
                                 </label>
                                 <label class="btn btn-white btn-md waves-effect">
                                    <input type="checkbox" autocomplete="off"> Type
                                 </label>
                                 <label class="btn btn-white btn-md waves-effect">
                                    <input type="checkbox" autocomplete="off"> Name
                                 </label>
                            </div>
                        </div>

                    </div>
                </div>

               






        @include('vehicles.list')

                

            </div>
        </div>






        <div id="newVehicleModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 class="modal-title"><b>Connect New Vehicle</b></h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('vehicles.store') }}">

                                            {{ csrf_field() }}
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
                                                        <label for="field-1" class="control-label">Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Ex. Suzuki Ciaz">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('type') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">Type</label>
                                                        <input type="text" class="form-control" value="{{ old('type') }}" id="type" name="type" placeholder="Ex. Sedan Car">
                                                    </div>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('fuel_type') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">Fuel Type</label>
                                                        <select class="form-control" name="fuel_type" id="fuel_type">
                                                            <option value="0" {{ old('fuel_type') == 0 ? 'selected' : '' }}>Petrol</option>
                                                            <option value="1" {{ old('fuel_type') == 1 ? 'selected' : '' }}>Deisel</option>
                                                            <option value="2" {{ old('fuel_type') == 2 ? 'selected' : '' }}>CNG</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group {{ $errors->has('high_speed') ? 'has-error' : '' }}">
                                                        <label for="field-2" class="control-label">High Speed</label>
                                                        <input type="text" class="form-control" value="{{ old('high_speed') }}" id="high_speed" name="high_speed" placeholder="The highest speed the vehicle can take in Km/h Ex. 180">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group {{ $errors->has('uniqid') ? 'has-error' : '' }}">
                                                        <label for="field-3" class="control-label">Unique Id</label>
                                                        <input type="text" value="{{ old('uniqid') }}" class="form-control" id="uniqid" name="uniqid" placeholder="Ex. TC9922367414">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group {{ $errors->has('plate_no') ? 'has-error' : '' }}">
                                                        <label for="field-4" class="control-label">Vehicle No.</label>
                                                        <input type="text" value="{{ old('plate_no') }}" class="form-control" id="plate_no" name="plate_no" placeholder="Ex. MH 15 FF 9444">
                                                    </div>
                                                </div>
                                               
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group no-margin {{ $errors->has('description') ? 'has-error' : '' }}>
                                                        <label for="field-7" class="control-label">Describe Your Vehicle</label>
                                                        <textarea class="form-control autogrow" id="description" name="description" placeholder="Any additional info about the vehicle" style="overflow: hidden; word-wrap: break-word; resize: horizontal; height: 104px;">{{ old('description') }}</textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Connect Vehicle</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>
@endsection


@section('js')
    
     <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcV3dvZfjny181wWJGCl9otO-o2_0mHZM&libraries=drawing,places,geometry"></script>

    <script src="/js/distanceCalculator.js"></script>

    <script type="text/javascript">


            @if($errors->any())
            
                $('#newVehicleModal').modal();
            
            @endif


         

            $(window).load(function(){
                 
                var moveWatcher; 
                var vehiclesInTransit = 0;    

                @foreach($vehicles as $vehicle)

                 calculateDistanceTravelled('{{substr($vehicle->uniqid, 2)}}');

                 var speedings = firebase.database().ref('users/{{substr($vehicle->uniqid, 2)}}'  + '/locations');
                    speedings.limitToLast(1).on('child_added', function(snapshot) {

                        startTime = moment().format('MMMM Do YYYY, h:mm:ss a');
                      
                        var time = moment(snapshot.val().created_at);
                        var seconds = time.diffSecs();


                        if(seconds > 100 || snapshot.val().speed < 5)
                        {
                             
                             $("#vehicle-status-{{$vehicle->id}}").html('&nbsp;<span class="text-danger"><span class="fa fa-circle"></span> Parked</span>');
                        } 
                        else {

                              
                             $("#vehicle-status-{{$vehicle->id}}").html('&nbsp;<span class="text-success"><span class="fa fa-car"></span> In Transit</span>');

                             vehiclesInTransit++;
                             $('#moving-vehicles').html(vehiclesInTransit); 

                             clearTimeout(moveWatcher);

                            moveWatcher = setTimeout(function() {
                                $("#vehicle-status-{{$vehicle->id}}").html('&nbsp;<span class="text-danger"><span class="fa fa-circle"></span> Parked</span>');
                                  vm = parseInt($('#moving-vehicles').html());
                                  vm = vm-1;
                                  $('#moving-vehicles').html(vm); 

                            }, 40000);
                        
                        }

                       
                    }); 

                  @endforeach 

                  
            });



     
    </script>            


@endsection



