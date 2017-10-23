@extends('layouts.app')


@section('content')

	<div class="wrapper">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-default dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i class="fa fa-cog"></i></span></button>
                            <ul class="dropdown-menu drop-menu-right" role="menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                            </ul>
                        </div>

                        <h4 class="page-title">Contact</h4>
                        <ol class="breadcrumb">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Manage</a></li>
                            <li class="active">People</li>
                        </ol>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <form role="form">
                            <div class="form-group contact-search m-b-30">
                                <input type="text" id="search" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white"><i class="fa fa-search"></i></button>
                            </div> <!-- form-group -->
                        </form>
                    </div>
                    <div class="col-sm-4">
                         <a href="#custom-modal" class="btn btn-default btn-md waves-effect waves-light m-b-30" data-animation="fadein" data-plugin="custommodal"
                                                data-overlaySpeed="200" data-overlayColor="#36404a"><i class="fa fa-plus"></i> Add New Person</a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->



                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->



                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->


                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->


                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->



                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->


                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div> <!-- end col -->

                    <div class="col-sm-6 col-lg-4">
                        <div class="card-box">
                            <div class="contact-card">
                                <a class="pull-left" href="#">
                                    <img class="img-circle" src="/images/avatar-1.jpg" alt="">
                                </a>
                                <div class="member-info">
                                    <h4 class="m-t-0 m-b-5 header-title"><b>Bill Bertz</b></h4>
                                    <p class="text-muted">Branch manager</p>
                                    <p class="text-dark"><i class="fa fa-home m-r-10"></i><small>ABC company Pvt Ltd.</small></p>
                                    <div class="contact-action">
                                        <a href="#" class="btn btn-success btn-sm"><i class="md md-mode-edit"></i></a>
                                        <a href="#" class="btn btn-danger btn-sm"><i class="md md-close"></i></a>
                                    </div>
                                </div>

                                <ul class="social-links list-inline m-0">
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    </li>
                                    <li>
                                        <a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="" data-original-title="Message"><i class="fa fa-envelope-o"></i></a>
                                    </li>
                                </ul>
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
            <h4 class="custom-modal-title">Add Contact</h4>
            <div class="custom-modal-text text-left">
                <form role="form">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="Enter name">
                    </div>
                    <div class="form-group">
                        <label for="position">Position</label>
                        <input type="text" class="form-control" id="position" placeholder="Enter position">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" id="company" placeholder="Enter company">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                    </div>

                    <button type="submit" class="btn btn-default waves-effect waves-light">Save</button>
                    <button type="button" class="btn btn-danger waves-effect waves-light m-l-10">Cancel</button>
                </form>
            </div>
        </div>


@endsection