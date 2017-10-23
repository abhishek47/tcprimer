@extends('layouts.app')


@section('content')

	  <div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30 pull-right" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-plus"></i> Add New</a>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="page-title">Invoices</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">Invoices</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="card-box">
                            <div class="row m-t-10 m-b-10">
                                <div class="col-sm-6 col-lg-8">
                                    <form role="form">
                                        <div class="form-group contact-search m-b-30">
                                            <input type="text" id="search" class="form-control" placeholder="Search...">
                                            <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                                        </div> <!-- form-group -->
                                    </form>
                                </div>

                                <div class="col-sm-6 col-lg-4">
                                    <div class="h5 m-0">
                                        <span class="vertical-middle">Sort By:</span>
                                        <div class="btn-group vertical-middle" data-toggle="buttons">
                                             <label class="btn btn-white btn-md waves-effect active">
                                                <input type="radio" autocomplete="off" checked=""> Status
                                             </label>
                                             <label class="btn btn-white btn-md waves-effect">
                                                <input type="radio" autocomplete="off"> Type
                                             </label>
                                             <label class="btn btn-white btn-md waves-effect">
                                                <input type="radio" autocomplete="off"> Name
                                             </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-actions-bar">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Order Date</th>
                                            <th>Order Number</th>
                                            <th>Seller</th>
                                            <th>Status</th>
                                            <th>Amount</th>
                                            <th style="min-width: 80px;">Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <tr>
                                            <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160924</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160923</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Samsung Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-warning">Shipped</span>
                                            </td>
                                            <td>$2,562</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160922</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Sony Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary">Proceed</span>
                                            </td>
                                            <td>$6,458</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160921</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-danger">Cancel</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160920</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$7,521</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160924</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160923</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Samsung Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-warning">Shipped</span>
                                            </td>
                                            <td>$2,562</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160922</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Sony Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary">Proceed</span>
                                            </td>
                                            <td>$6,458</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160921</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-danger">Cancel</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160920</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$7,521</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>


                                        <tr>
                                            <td><img src="assets/images/products/iphone.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160924</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/samsung.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160923</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Samsung Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-warning">Shipped</span>
                                            </td>
                                            <td>$2,562</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/lumia.jpg" class="thumb-sm" alt=""> </td>
                                            <td>08/10/2015</td>
                                            <td><a href="#">UB#160922</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Sony Company</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-primary">Proceed</span>
                                            </td>
                                            <td>$6,458</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/imac.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160921</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-danger">Cancel</span>
                                            </td>
                                            <td>$1,256</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td><img src="assets/images/products/macbook.jpg" class="thumb-sm" alt=""> </td>
                                            <td>07/10/2015</td>
                                            <td><a href="#">UB#160920</a></td>
                                            <td>
                                                <a href="" class="text-dark"><b>Apple Inc.</b></a>
                                            </td>
                                            <td>
                                                <span class="label label-success">Deliverd</span>
                                            </td>
                                            <td>$7,521</td>
                                            <td>
                                                <a href="#" class="table-action-btn"><i class="md md-edit"></i></a>
                                                <a href="#" class="table-action-btn"><i class="md md-close"></i></a>
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div> <!-- end col -->


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