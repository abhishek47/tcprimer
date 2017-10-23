@extends('layouts.auth')

@section('content')
  <div class="account-pages"></div>
        <div class="clearfix"></div>
        <div class="wrapper-page">
            <div class=" card-box">
            <div class="panel-heading"> 
                <h3 class="text-center"> Sign In to <strong class="text-custom">Primer</strong> </h3>
            </div> 


            <div class="panel-body">
            <form class="form-horizontal m-t-20" method="POST" action="{{ route('login') }}">

                @include('partials.errors')

                {{ csrf_field() }}
                
                <div class="form-group ">
                    <div class="col-xs-12">
                        <input class="form-control" type="text" name="email" value="{{ old('email') }}" required="" placeholder="E-mail Address">
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <input class="form-control" type="password" required="" name="password" placeholder="Password">
                    </div>
                </div>

                <div class="form-group ">
                    <div class="col-xs-12">
                        <div class="checkbox checkbox-primary">
                            <input id="checkbox-signup" name="remember" value="{{ old('remember') ? 'checked' : '' }}" type="checkbox">
                            <label for="checkbox-signup">
                                Remember me
                            </label>
                        </div>
                        
                    </div>
                </div>
                
                <div class="form-group text-center m-t-40">
                    <div class="col-xs-12">
                        <button class="btn btn-pink btn-block text-uppercase waves-effect waves-light" type="submit">Log In</button>
                    </div>
                </div>

                <div class="form-group m-t-30 m-b-0">
                    <div class="col-sm-12">
                        <a href="/password/reset" class="text-dark"><i class="fa fa-lock m-r-5"></i> Forgot your password?</a>
                    </div>
                </div>
            </form> 
            
            </div>   
            </div>                              
            <div class="row">
                <div class="col-sm-12 text-center">
                    
                    <p>Don't have an account? <a href="{{ route('register') }}" class="text-primary m-l-5"><b>Sign Up</b></a></p>
                        
                </div>
            </div>
            
        </div>
        
        

       
@endsection
