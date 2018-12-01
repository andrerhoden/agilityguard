@extends('layouts.dentistportal.main')
@section('content')

<section class="masthead white-bg">
    <div class="container">
    <div class="row">
        <div class="col">
        <h1>Create Order</h1>
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
                        <a class="nav-link"  href="/dentist-portal/dashboard">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/dentist-portal/create-order">Create Lab Order</a>
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
                                                Step 1 - Patient Details Date:
                                                </button>
                                            </h5>
                                        </div>
                                    
                                        <div id="step1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                            <div class="card-body">

                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_name">Firstname *</label>
                                                                    <input id="form_name" type="text" name="name" class="form-control" required="required" data-error="Firstname is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_lastname">Lastname *</label>
                                                                    <input id="form_lastname" type="text" name="surname" class="form-control" required="required" data-error="Lastname is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form_address">Address *</label>
                                                                    <input id="form_address" type="text" name="address" class="form-control" required="required" data-error="Address is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_city">City *</label>
                                                                    <input id="form_city" type="text" name="city" class="form-control" required="required" data-error="City is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form_prov">Prov/State *</label>
                                                                    <input id="form_prov" type="text" name="prov" class="form-control" required="required" data-error="Prov/State is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form_postal">Postal/Zip *</label>
                                                                    <input id="form_postal" type="text" name="postal" class="form-control" required="required" data-error="Postal/Zip is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_country">Country *</label>
                                                                    <input id="form_country" type="text" name="country" class="form-control" required="required" data-error="Country is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_phone">Phone Number *</label>
                                                                    <input id="form_phone" type="text" name="phone" class="form-control" required="required" data-error="Phone Number is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form_email">Email *</label>
                                                                    <input id="form_email" type="email" name="email" class="form-control" required="required" data-error="Email is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form_address">Sports</label>
                                                                    <input id="form_address" type="text" name="address" placeholder="comma separated" class="form-control" data-error="Address is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form_comments">Comments </label>
                                                                    <textarea id="form_comments" name="comments" class="form-control" rows="4"></textarea>
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
                                                    Step 2 - Guard Details
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="step2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                            <div class="card-body">


                                                <div id="guard-details">
                                                    <div class="row guard-item-order">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="form_product">Product *</label>
                                                                <select id="form_product" name="product-1" class="form-control" required="required" data-error="Please specify your product.">
                                                                    <option value=""></option>
                                                                    <option value="Product 1">Product 1</option>
                                                                    <option value="Product 2">Product 2</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="form_product_type">Guard Type *</label>
                                                                <select id="form_product_type" name="product-1-type" class="form-control" required="required" data-error="Please specify a type.">
                                                                    <option value=""></option>
                                                                    <option value="upper">Upper</option>
                                                                    <option value="lower">Lower</option>
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="form_product_color">Color *</label>
                                                                <select id="form_product_color" name="product-1-color" class="form-control" required="required" data-error="Please specify a color.">
                                                                    <option value=""></option>
                                                                    <option value="bright red">Bright Red</option>
                                                                    <option value="maroon">Maroon</option>
                                                                    <option value="Bright Yellow">Bright Yellow</option>
                                                                    <option value="Deep Green">Deep Green</option>
                                                                    <option value="Bright Blue">Bright Blue</option>
                                                                    <option value="Pure White">Pure White</option>
                                                                    <option value="Bright Green">Bright Green</option>
                                                                    <option value="Deep Black">Deep Black</option>
                                                                    <option value="Bright Pink">Bright Pink</option>
                                                                    <option value="Gold">Gold</option>
                                                                    <option value="Deep Red">Deep Red</option>
                                                                    <option value="Silver">Silver</option>
                                                                    <option value="Dark Blue">Dark Blue</option>
                                                                    <option value="Transparent">Transparent</option>
                                                                    <option value="Light Blue">Light Blue</option>    
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                    </div>   
                                                </div>                    
                                                <div class="row">
                                                    <div class="col-6">
                                                        <div class="form-group">
                                                            <button id="add_guard" type="button" class="btn btn-outline-primary" onclick="addRow();">+ Add </button>
                                                        </div>
                                                    </div>
                                                    <div class="col-6 text-right">
                                                            <div class="form-group">
                                                                <button id="remove_guard" type="button" class="btn btn-outline-primary" onclick="removeRow();">- Remove </button>
                                                            </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-6">
                                                        Sub-Total:
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span id="sub_total">$0</h4>
                                                    </div>
                                                </div>
                                        


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#step3" aria-expanded="false" aria-controls="step3">
                                                Step 3 - Choose Lab
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="step3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                            <div class="card-body">
                                                
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#step4" aria-expanded="false" aria-controls="step4">
                                                    Step 4 - Shipping Info
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="step4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                            <div class="card-body">


                                                    <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="shipto" id="shipto1" value="option1" checked>
                                                                    <label class="form-check-label" for="shipto1">
                                                                        Dentist
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="shipto" id="shipto2" value="option2">
                                                                    <label class="form-check-label" for="shipto2">
                                                                        Patient
                                                                    </label>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio" name="shipto" id="shipto3" value="option3">
                                                                    <label class="form-check-label" for="shipto3">
                                                                        Other
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#step5" aria-expanded="false" aria-controls="step5">
                                                Your Order
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="step5" class="collapse" aria-labelledby="heading5" data-parent="#accordion">
                                            <div class="card-body">
                                                

                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            Sub-Total:
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                            <span id="sub_total2">$0</h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            Taxes:
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                                <span id="taxes">$0</span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            <b>Total:</b>
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                            <span id="totals">$0</span>
                                                        </div>
                                                    </div>
                                                    <br/><Br/>
                                                    <div class="row">
                                                        <div class="col-md-12">
                                                            <input type="hidden" value="" id="form_sub" name="form_sub">
                                                            <input type="hidden" value="" id="form_tax" name="form_tax">
                                                            <input type="hidden" value="" id="form_total" name="form_total">
                                                            
                                                            <input type="submit" class="button" value="Process Order" />
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