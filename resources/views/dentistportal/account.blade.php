@extends('layouts.dentistportal.main')
@section('content')

<section class="masthead white-bg">
    <div class="container">
    <div class="row">
        <div class="col">
        <h1>Account Profile</h1>
        </div>
    </div>
    </div>
</section>



<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
            <nav class="portal-menu">
                <ul class="nav nav-pills nav-fill">
                <li class="nav-item">
                        <a class="nav-link active"  href="{{$_ENV['APP_URL']}}/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{$_ENV['APP_URL']}}/dentist-portal/create-order">Create Lab Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{$_ENV['APP_URL']}}/dentist-portal/orders">Lab Orders</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Change Password</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{$_ENV['APP_URL']}}/dentist-portal/logout">Logout</a>
                    </li>
                </ul>
            </nav>
            </div>
        </div>
    </div>
</section>




<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
        
            
                    <form id="account-form" method="post" role="form" action="{{$_ENV['APP_URL']}}/dentist-portal/account/save">
                        {{ csrf_field() }}

                            <div class="messages">
                                @if(session()->has('message'))
                                    <div class="alert alert-success">
                                        {{ session()->get('message') }}
                                    </div>        
                                @endif
                                @if(session()->has('warning'))
                                    <div class="alert alert-danger">
                                        {{ session()->get('warning') }}
                                    </div>        
                                @endif
                            </div>
                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <p class="text-muted">
                                        <strong>*</strong> These fields are required. </p>
                                </div>
                            </div>
                            <div class="controls">
                                <div id="accordion">    
                                        <div class="card">
                                            <div class="card-header" id="heading1">
                                                <h5 class="mb-0">
                                                    <a class="btn btn-link" data-toggle="collapse" data-target="#step1" aria-expanded="true" aria-controls="step1">
                                                    Dentist Details:
                                                    </a>
                                                </h5>
                                            </div>
                                        
                                            <div id="step1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                                <div class="card-body">

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="form_name">Dentist Name *</label>
                                                                        <input id="form_name" type="text" name="DentistName" class="form-control" value="{{$dentist->Name}}" required="required" readonly data-error="Firstname is required.">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="form_email">Email *</label>
                                                                        <input id="form_email" type="email" name="EmailAddress" value="{{$dentist->EmailAddress}}" class="form-control" required="required" data-error="Email is required.">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                        </div>

                                                        <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="form_password">Password *</label>
                                                                        <input id="form_password" type="password" name="Password" class="form-control" value="{{$dentist->Password}}" required="required" data-error="Password is required.">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="form_confirm_password">Confirm Password *</label>
                                                                        <input id="form_confirm_password" type="password" name="ConfirmPassword" value="{{$dentist->Password}}" class="form-control" required="required" data-error="Confirm Password is required.">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                        </div>
                                                            
                                                            

                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="heading2">
                                                <h5 class="mb-0">
                                                    <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#step2" aria-expanded="false" aria-controls="step2">
                                                        Dental Practice Details:
                                                    </a>
                                                </h5>
                                            </div>
                                            <div id="step2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                            <div class="card-body">

                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="form_name">Dental Practice Name *</label>
                                                            <input id="form_name" type="text" name="DentalPracticeName" class="form-control" readonly value="{{$dentist->dentalPracticeId->Name}}" required="required" data-error="Firstname is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_name">Website</label>
                                                            <input id="form_name" type="text" name="website" class="form-control" value="{{$dentist->dentalPracticeId->Website}}" >
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_email">Dental Practice Email</label>
                                                            <input id="form_email" type="email" name="email" class="form-control" value="{{$dentist->dentalPracticeId->EmailAddress}}" >
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="form_address">Address *</label>
                                                            <input id="form_address" type="text" name="address" class="form-control" value="{{$dentist->dentalPracticeId->Address}}" required="required" data-error="Address is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_city">City *</label>
                                                            <input id="form_city" type="text" name="city" class="form-control" value="{{$dentist->dentalPracticeId->City}}" required="required" data-error="City is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="form_prov">Prov/State *</label>
                                                            <input id="form_prov" type="text" name="prov" class="form-control" value="{{$dentist->dentalPracticeId->Province}}" required="required" data-error="Prov/State is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="form_postal">Postal/Zip *</label>
                                                            <input id="form_postal" type="text" name="postal" class="form-control" value="{{$dentist->dentalPracticeId->Postal_code}}" required="required" data-error="Postal/Zip is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_country">Country *</label>
                                                            <input id="form_country" type="text" name="country" class="form-control" value="{{$dentist->dentalPracticeId->Country}}" required="required" data-error="Country is required.">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_phone">Phone Number</label>
                                                            <input id="form_phone" type="text" name="phone" class="form-control" value="{{$dentist->dentalPracticeId->phone_office}}">
                                                            <div class="help-block with-errors"></div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>


                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_country">Longitude</label>
                                                            <input type="text" readonly class="form-control" value="{{$dentist->dentalPracticeId->Long}}">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="form_phone">Latitude</label>
                                                            <input type="text" readonly class="form-control" value="{{$dentist->dentalPracticeId->Lat}}">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                


                                            </div>
                                            </div>
                                        </div>                                        
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12 text-right">
                                    <p class="text-muted"></p>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-lg-12 text-right">
                                    <input type="submit" class="button" value="Update Details">
                                </div>
                            </div>

                    </form>


            </div>
        </div>
    </div>
</section>





  
@endsection