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
                        <a class="nav-link active"  href="/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dentist-portal/create-order">Create Lab Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="/dentist-portal/orders">Lab Orders</a>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link disabled" href="#">Change Password</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="/dentist-portal/logout">Logout</a>
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
        

                    <form id="order-form" method="get" role="form">

                            <div class="messages"></div>
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
                                                <button class="btn btn-link" data-toggle="collapse" data-target="#step1" aria-expanded="true" aria-controls="step1">
                                                Dentist Details:
                                                </button>
                                            </h5>
                                        </div>
                                    
                                        <div id="step1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                            <div class="card-body">

                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_name">Dentist Name *</label>
                                                                    <input id="form_name" type="text" name="DentistName" class="form-control" value="{{$dentist->Name}}" required="required" data-error="Firstname is required.">
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
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#step2" aria-expanded="false" aria-controls="step2">
                                                    Dental Practice Details:
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="step2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                        <div class="card-body">

                                        <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_name">Dental Practice Name *</label>
                                                        <input id="form_name" type="text" name="DentalPracticeName" class="form-control" value="{{$dentist->dentalPracticeId->Name}}" required="required" data-error="Firstname is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="form_address">Address *</label>
                                                        <input id="form_address" type="text" name="address" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="Address is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_city">City *</label>
                                                        <input id="form_city" type="text" name="city" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="City is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="form_prov">Prov/State *</label>
                                                        <input id="form_prov" type="text" name="prov" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="Prov/State is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="form_postal">Postal/Zip *</label>
                                                        <input id="form_postal" type="text" name="postal" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="Postal/Zip is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_country">Country *</label>
                                                        <input id="form_country" type="text" name="country" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="Country is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_phone">Phone Number *</label>
                                                        <input id="form_phone" type="text" name="phone" class="form-control" value="{{$dentist->dentalPracticeId->}}"  required="required" data-error="Phone Number is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="form_email">Email *</label>
                                                        <input id="form_email" type="email" name="email" class="form-control" value="{{$dentist->dentalPracticeId->}}" required="required" data-error="Email is required.">
                                                        <div class="help-block with-errors"></div>
                                                    </div>
                                                </div>
                                            </div>
                                            


                                        </div>
                                        </div>
                                    </div>
                                    
                                    
                                </div>
                                        
                                <!-- Accordion 1 -->
                                
                                <!-- Accordion 2 -->

                                



                                <!-- Accordion 3 -->



                                <!-- Accordion 4 -->
                                

                                <!-- Accordion 5 -->
                                
                                    
                            






                                
                            
                        </form>


            </div>
        </div>
    </div>
</section>





  
@endsection