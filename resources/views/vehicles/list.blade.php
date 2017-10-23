 

 <div class="row">
 


                @foreach($vehicles as $vehicle)

                <div class="col-lg-3 col-sm-6">
                        <div class="widget-panel widget-style-2 bg-white">
                            <i class="fa fa-car text-danger" style="padding-top: 45px;"></i>
                            <h2 class="m-0 text-dark counter font-600">{{ $vehicle->name }} <span style="font-size: 16px;font-weight: bold;" id="vehicle-status-{{$vehicle->id}}" class="text-danger hidden-xs"></span></h4></h2>
                            <div class="text-dark m-t-5">{{ $vehicle->plate_no }}</div>
                            <div class="m-t-10"> <a href="/vehicles/{{$vehicle->uniqid}}" class="btn btn-success"><span class="fa fa-bars"></span> Monitor</a></div>
                        </div>
                    </div>
 @endforeach

 </div>