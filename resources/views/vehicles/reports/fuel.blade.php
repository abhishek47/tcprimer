@extends('layouts.app')



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
                                <a href="/home">Vehicles</a>
                            </li>
                            <li>
                               <a href="/vehicles/{{$vehicle->uniqid}}">{{ $vehicle->plate_no }}</a>
                            </li>
                            <li class="ative">
                            	Fuel Reports
                            </li>
                        </ol>
                        <h4 class="page-title large">{{ $vehicle->name }} : Fuel Reports <span id="vehicle-status" class="text-danger"></span></h4>
                        
                    </div>
                </div>

                <input type="hidden" id="uniqid" value="{{ substr($vehicle->uniqid, 2)   }}">



                <div class="row">
                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Last 7 Days Report</b></h4>
                            <p class="text-dark m-b-5 font-13" style="font-weight: bold;" >Weekly Average : <span id="week-average">0</span> %
                            </p>
                            <p class="text-muted m-b-15 font-13">An approximate average of speed with which the vehicle daily moves.
                            </p>

                            <canvas id="weekSpeedChart" height="260"></canvas>
                        </div>
                    </div>

                     <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Fuel Level Comparison (in %)</b></h4>
                            <p class="text-dark m-b-5 font-13" style="font-weight: bold;" >Normally : <span id="speed-comparison-label">0</span> 
                            </p>
                            <p class="text-muted m-b-15 font-13">This is an overall comparison of the speed reports of the vehicle that defines how many times high speed of the vehicle was recorded and similarly the normal and the low speed.
                            </p>

                            <canvas id="speed-comparison" height="260"></canvas>
                        </div>
                    </div>

                    
                </div>



                <div class="row">

                <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Daily Report <small id="daily-date-label">{{ (new DateTime())->modify('-1 day')->format("Y-m-d") }}</small></b>
                        	</h4>
                        	<select class="form-control report-date-selector" id="daily-date" onchange="dailyChart()">
                            		@foreach(getDatesFromCreated($vehicle->created_at) as $date)
                        			<option value="{{ $date }}" {{ $date == (new DateTime())->modify('-1 day')->format("Y-m-d") ? 'selected' : '' }}>{{ $date }}</option>
                            		@endforeach	
                            	</select>
                             <p class="text-dark m-b-5 font-13" style="font-weight: bold;" >Daily Average : <span id="daily-average">0</span> %
                            </p>
                            <p class="text-muted m-b-15 font-13">An approximate average of speed with which the vehicle moves at different time of the day.
                            </p>

                            <canvas id="dailySpeedChart" height="300"></canvas>
                        </div>
                    </div>

                


                    <div class="col-lg-6">
                        <div class="card-box">
                            <h4 class="m-t-0 header-title"><b>Last 30 Days Report</b></h4>
                             <p class="text-dark m-b-5 font-13" style="font-weight: bold;" >Monthly Average : <span id="month-average">0</span> %
                            </p>
                            <p class="text-muted m-b-15 font-13">Speeding report of the vehicle for the last 30 Days
                            </p>


                            <canvas id="monthly-chart" height="300"></canvas>
                            
                        </div>
                    </div>

                   
                </div>




               

            </div>   
    </div>        


@endsection

	
@section('js')
	
	<script src="/js/chart.js"></script>
	<script src="/js/fuelreports.js"></script>

	@include('vehicles.reports.setup.fuel.week')
    @include('vehicles.reports.setup.fuel.daily')
    @include('vehicles.reports.setup.fuel.monthly')
     @include('vehicles.reports.setup.fuel.comparison')



@endsection