@extends('layouts.app')


@section('content')

	 <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <h4 class="page-title">Customers</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">Customers</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-7">
                        <form role="form">
                            <div class="form-group contact-search m-b-30">
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-sm-5">
                         <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="md md-add"></i> Add New</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-8">

                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/envato.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Envato Market Pty Ltd. </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-info">Hot</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/coco-cola.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>The Coca-Cola Company </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-purple">Cold</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/envato.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Dribbble LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-warning">In-progress</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/coco-cola.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Coderthemes design </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-danger">Lost</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/wrap.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>WrapMarket LLC </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-success">Won</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/envato.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>Envato Market Pty Ltd. </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-info">Hot</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>
                            </div>
                        </div>


                        <div class="card-box m-b-10">
                            <div class="table-box opport-box">
                                <div class="table-detail">
                                    <img src="/images/coco-cola.jpg" alt="img" class="img-circle thumb-lg m-r-15" />
                                </div>

                                <div class="table-detail">
                                    <div class="member-info">
                                        <h4 class="m-t-0"><b>The Coca-Cola Company </b></h4>
                                        <p class="text-dark m-b-5"><b>Category: </b> <span class="text-muted">Branch manager</span></p>
                                    </div>
                                </div>

                                <div class="table-detail lable-detail">
                                    <span class="label label-purple">Cold</span>
                                </div>

                                <div class="table-detail">
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Assign</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Call</a>
                                    <a href="#" class="btn btn-sm btn-primary waves-effect waves-light">Email</a>
                                </div>

                                <div class="table-detail table-actions-bar">
                                    <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                    <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                </div>

                            </div>
                        </div>




                    </div> <!-- end col -->

                    <div class="col-lg-4">
                        <div class="card-box m-b-0">
                            <h4 class=" header-title m-t-0 m-b-20 text-dark">Leads Statics</h4>
                            <div id="morris-bar-stacked" style="height: 260px;"></div>

                            <div class="p-20">
                                <h4 class="m-b-20 header-title"><b>Activities</b></h4>
                                <div class="nicescroll p-l-r-10" style="max-height: 535px;">
                                    <div class="timeline-2">
                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>5 minutes ago</small></div>
                                                <p><strong><a href="#" class="text-info">John Doe</a></strong> Uploaded a photo <strong>"DSC000586.jpg"</strong></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>30 minutes ago</small></div>
                                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>59 minutes ago</small></div>
                                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>5 minutes ago</small></div>
                                                <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>30 minutes ago</small></div>
                                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>59 minutes ago</small></div>
                                                <p><a href="" class="text-info">Jessi</a> attended a meeting with<a href="#" class="text-success">John Doe</a>.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>5 minutes ago</small></div>
                                                <p><strong><a href="#" class="text-info">John Doe</a></strong>Uploaded 2 new photos</p>
                                            </div>
                                        </div>

                                        <div class="time-item">
                                            <div class="item-info">
                                                <div class="text-muted"><small>30 minutes ago</small></div>
                                                <p><a href="" class="text-info">Lorem</a> commented your post.</p>
                                                <p><em>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam laoreet tellus ut tincidunt euismod. "</em></p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!-- Footer -->
                <footer class="footer text-right">
                    <div class="container">
                        <div class="row">
                            <div class="col-xs-6">
                                © 2017. All rights reserved.
                            </div>
                            <div class="col-xs-6">
                                <ul class="pull-right list-inline m-b-0">
                                    <li>
                                        <a href="#">About</a>
                                    </li>
                                    <li>
                                        <a href="#">Help</a>
                                    </li>
                                    <li>
                                        <a href="#">Contact</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <!-- End Footer -->

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->


        <!-- Modal -->
        <div id="custom-modal" class="modal-demo">
            <button type="button" class="close" onclick="Custombox.close();">
                <span>&times;</span><span class="sr-only">Close</span>
            </button>
            <h4 class="custom-modal-title">Add Leads</h4>
            <div class="custom-modal-text text-left">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>

                    <div class="form-group">
                        <label for="category">Category</label>
                        <input type="text" class="form-control" id="category" placeholder="Enter category">
                    </div>

                    <div class="form-group">
                        <label for="number">Contact number</label>
                        <input type="text" class="form-control" id="number" placeholder="Enter number">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <div class="form-group">
                        <label for="status">Status</label>
                        <input type="text" class="form-control" id="status" placeholder="status">
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
* Theme: Ubold Admin Template
* Author: Coderthemes
* Leads
*/

!function($) {
    "use strict";

    var LeadsCharts = function() {};

    //creates Stacked chart
    LeadsCharts.prototype.createStackedChart  = function(element, data, xkey, ykeys, labels, lineColors) {
        Morris.Bar({
            element: element,
            data: data,
            xkey: xkey,
            ykeys: ykeys,
            stacked: true,
            labels: labels,
            hideHover: 'auto',
            resize: true, //defaulted to true
            gridLineColor: '#eeeeee',
            barColors: lineColors
        });
    },
    
    LeadsCharts.prototype.init = function() {

        
        //creating Stacked chart
        var $stckedData  = [
            { y: 'Mon', a: 45, b: 180 },
            { y: 'Tue', a: 75,  b: 65 },
            { y: 'Wed', a: 100, b: 90 },
            { y: 'Thur', a: 75,  b: 65 },
            { y: 'Fri', a: 100, b: 90 },
            { y: 'Sat', a: 75,  b: 65 },
            { y: 'Sun', a: 50,  b: 40 }
        ];
        this.createStackedChart('morris-bar-stacked', $stckedData, 'y', ['a', 'b'], ['Series A', 'Series B'], ['#5d9cec', '#ebeff2']);

    },
    //init
    $.LeadsCharts = new LeadsCharts, $.LeadsCharts.Constructor = LeadsCharts
}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.LeadsCharts.init();
}(window.jQuery);
	</script>


@endsection