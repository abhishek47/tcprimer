@extends('layouts.app')


@section('content')

	<div class="wrapper">
            <div class="container">


                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                         

                        <h4 class="page-title">{{ $customer->name }} ({{ $customer->category }}) - Documents</h4>
                        <ol class="breadcrumb">
                            <li><a href="/home">Home</a></li>
                            <li><a href="/customers">Customers</a></li>
                            <li><a href="/customers/{{ $customer->id }}">{{ $customer->name }}</a></li>
                            <li class="active">Documents</li>
                        </ol>

                        <button type="button" class="btn btn-techno  waves-effect waves-light" data-toggle="modal" data-target="#newDocumentModal" aria-expanded="false">New Document <span class="m-l-5"><i class="fa fa-plus"></i></span></button>
                    </div>



                </div>

                @include('partials.errors')


                <div class="row port m-b-20">
                    <div class="portfolioContainer">

                    	@foreach($customer->documents as $doc)


	                        <div class="col-sm-6 col-lg-3 col-md-4">
	                            <div class="gal-detail thumb">

	                                <a href="{{ $doc->path }}" class="document" style="width: 90%;" target="_blank" >
	                                   <i class="fa fa-file"></i> {{ $doc->name }}
	                                </a>
	                                <a href="/people/documents/{{$doc->id}}/delete" class="text-danger">Delete</i></a>
	                                
	                            </div>
	                        </div>

                        @endforeach



                    </div>
                </div> <!-- End row -->

                

            </div> <!-- end container -->
        </div>
        <!-- end wrapper -->




        <div id="newDocumentModal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" >
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            <h3 class="modal-title"><b>Add New Document</b></h3>
                                        </div>
                                        <div class="modal-body">
                                            <form method="POST" action="{{ route('customers.documents.store', ['customer' => $customer]) }}" enctype="multipart/form-data">

                                            {{ csrf_field() }}

                                          
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name class="control-label">Document Name</label>
                                                        <input type="text" class="form-control" id="name" name="name" placeholder="Ex. Pan Card">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            	<div class="col-md-12">
                                            		 <div class="form-group">
		                                                <label class="control-label">Select File To Upload</label>
		                                                <input type="file" class="filestyle" name="document" id="document" data-buttontext="Select file" data-buttonname="btn-white">
		                                            </div>
                                            	</div>
                                            </div>
                                           
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-info waves-effect waves-light">Add Document</button>
                                        </div>
                                       </form> 
                                    </div>
                                </div>
                            </div>


@endsection