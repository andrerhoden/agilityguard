@extends('layouts.dentistportal.main')
@section('content')


<section class="masthead white-bg">
          <div class="container">
            <div class="row">
              <div class="col">
                <h1>{{ setting('site.title') }}</h1>
              </div>
            </div>
          </div>
      </section>

      

<section class="white-bg">
        <div class="container">

            <div class="row">
                <div class="col text-center">
            
                    <p>
                    Please use the form below to log into Agility Guard's Dentist Portal
                    </p>

                </div>
            </div>
            <div class="row justify-content-sm-center">
                <div class="col-sm-8 col-md-6">
                
                    <form id="log_in" action="{{$_ENV['APP_URL']}}/dentist-portal/login/execute" method="post" class="cf" >	{{ csrf_field() }}

                        <div class="form-group">
                            <label for="Email">Email Address *</label>
                            <input type="email" class="form-control" id="Email" name="Email" autocomplete="off" />
                        </div>
                        <div class="form-group">
                            <label for="strPassword">Password</label>
                            <input type="password" class="form-control" id="strPassword" name="strPassword" autocomplete="off" />
                        </div>

                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Login</button>
                            </div>
                            <div class="col-sm-8 text-right">
                                <p class="small">
                                    Forgot your password?
                                    <a data-toggle="collapse" href="#collapseResetPassword" role="button" aria-expanded="false" aria-controls="collapseResetPassword">
                                        Reset Password
                                    </a>
                                </p>
                            </div>
                        </div>
                    </form>
                    <div class="collapse" id="collapseResetPassword">
                         
                        <p>Please enter in your email information below. We will send you an email to reset your password.</p>

                        <form id="resetPassword" action="#" method="get">
                            <div class="form-group">
                                <label for="resetEmail">Email *</label>
                                <input type="email" class="form-control" name="resetEmail" id="resetEmail" autocomplete="off" />
                            </div>
                            <div class="form-group">
                                <label for="resetEmail2">Confirm *</label>
                                <input type="email" class="form-control" name="resetEmail2" id="resetEmail2" autocomplete="off" />
                            </div>
                            <button type="submit" class="btn btn-primary">Reset</button>
                        </form>
                    </div>

                </div>
            </div>
       
            <br /><br /><br /><br /><br />
        </div>
     
      </section>


@endsection