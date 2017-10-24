@extends('layouts.auth')

@section('content')

<div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
                <div class="panel-heading">
                    <h3 class="text-center"> Reset Password </h3>
                </div>

                <div class="panel-body">
                    <form method="POST" action="{{ route('password.email') }}" role="form" class="text-center">

                        {{ csrf_field() }}

                        @if ($errors->has('email'))
                                    <div class="alert alert-danger alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    ×
                                </button>
                                {{ $errors->first('email') }}
                            </div>
                                @endif

                        @if (session('status'))

                            <div class="alert alert-info alert-dismissable">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">
                                    ×
                                </button>
                                {{ session('status') }}
                            </div>

                       @endif

                         <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} m-b-0">
                            <div class="input-group">
                                <input id="email" name="email" value="{{ old('email') }}" type="email" class="form-control" placeholder="Enter Email" required="">
                                <span class="input-group-btn">
                                    <button type="submit" class="btn btn-orange w-sm waves-effect waves-light">
                                        Reset
                                    </button> 
                                </span>
                                 
                            </div>
                        </div>

                     

                    </form>

                     
                </div>
            </div>

            <div class="row">
                        <div class="col-sm-12 text-center">
                            
                            <p>Go back <a href="/" class="text-primary m-l-5"><b>Home</b></a></p>
                                
                        </div>
                    </div>
            

        </div>

@endsection
