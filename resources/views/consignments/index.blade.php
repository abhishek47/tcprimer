@extends('layouts.app')


@section('content')
	
	 <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Consignments</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">Consignments</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group contact-search m-b-30">
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-md-6">
                        <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30 pull-right" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-plus"></i> Add New</a>
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

                <div class="row">
                    <div class="col-lg-8">

                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox1" type="checkbox">
                                        <label for="checkbox1"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Enveto Market Pty Ltd. </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-info">Loading</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>The Coca-Cola Company </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-purple">Delivered</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox3" type="checkbox">
                                        <label for="checkbox3"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Dribbble LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-warning">In-progress</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox4" type="checkbox">
                                        <label for="checkbox4"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Coderthemes design </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-danger">Lost</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                        </div>



                        <div class="card-box">
                            <div class="table-box opport-box">
                                <div class="table-detail checkbx-detail">
                                    <div class="checkbox checkbox-primary m-r-15">
                                        <input id="checkbox5" type="checkbox">
                                        <label for="checkbox5"></label>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>WrapMarket LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                        <p class="text-dark m-b-0"><b>Active: </b> <span class="text-muted">2 hours ago</span></p>
                                    </div>
                                </div>

                                <div class="table-detail">
                                    <p class="text-dark m-b-5"><b>Email:</b> <span class="text-muted">coderthemes@gmail.com</span></p>
                                    <p class="text-dark m-b-0"><b>Contact:</b> <span class="text-muted">+12 34567890</span></p>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-success">Won</span>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="fa fa-map-marker"></i></a>
                                </div>
                            </div>
                        </div>

                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box">
                            <h4 class="font-bold m-t-0 m-b-20 text-dark">Status Chart</h4>
                            <canvas id="pie-chart"></canvas> 
                        </div>
                    </div>

                </div>

              

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->

        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add New</h4>
            <div class="custom-modal-text text-left">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="position">Category</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter category">
                    </div>

                    <div class="form-group">
                        <label for="position1">Contact number</label>
                        <input type="text" class="form-control" id="position1" placeholder="Enter number">
                    </div>


                    <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                </form>
            </div>
        </div>


@endsection


@section('js')

	<script type="text/javascript">
		
			/**
* Theme: Ubold Admin
* Author: Coderthemes
* Page: opportunities
*/

!function($) {
    "use strict";

    var Opportunities = function() {};

    Opportunities.prototype.init = function () {
        
        //Pie Chart
        c3.generate({
             bindto: '#pie-chart',
            data: {
                columns: [
                    ['Hot', 46],
                    ['Cold', 24],
                    ['In-progress', 46],
                    ['Lost', 10],
                    ['Won', 30]
                ],
                type : 'pie'
            },
            color: {
            	pattern: ["#34d3eb", "#7266ba", "#ffbd4a", "#f05050", "#81c868"]
            },
            pie: {
		        label: {
		          show: false
		        }
		    }
        });
        
    },
    $.Opportunities = new Opportunities, $.Opportunities.Constructor = Opportunities

}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.Opportunities.init()
}(window.jQuery);



	</script>


@endsection