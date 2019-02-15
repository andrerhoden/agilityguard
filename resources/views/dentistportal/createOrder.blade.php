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
                        <a class="nav-link"  href="{{$_ENV['APP_URL']}}/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="{{$_ENV['APP_URL']}}/dentist-portal/create-order">Create Lab Order</a>
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

<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
        

                    <form id="order-form" method="post" action="{{$_ENV['APP_URL']}}/dentist-portal/create-order/save" role="form">
                        {{ csrf_field() }}

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
                                                <a class="btn btn-link" data-toggle="collapse" data-target="#step1" aria-expanded="true" aria-controls="step1">
                                                Step 1 - Patient Details Date:
                                                </a>
                                            </h5>
                                        </div>
                                    
                                        <div id="step1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                            <div class="card-body">

                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-first_name">Firstname *</label>
                                                                    <input id="form-first_name" type="text" name="first_name" class="form-control" required="required" data-error="Firstname is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-last_name">Lastname *</label>
                                                                    <input id="form-last_name" type="text" name="last_name" class="form-control" required="required" data-error="Lastname is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-address">Address *</label>
                                                                    <input id="form-address" type="text" name="address" class="form-control" required="required" data-error="Address is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-city">City *</label>
                                                                    <input id="form-city" type="text" name="city" class="form-control" required="required" data-error="City is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form-prov">Prov/State *</label>
                                                                    <input id="form-prov" type="text" name="prov" class="form-control" required="required" data-error="Prov/State is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form-postal">Postal/Zip *</label>
                                                                    <input id="form-postal" type="text" name="postal" class="form-control" required="required" data-error="Postal/Zip is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-country">Country *</label>
                                                                    <input id="form-country" type="text" name="country" class="form-control" required="required" data-error="Country is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-phone_number">Phone Number *</label>
                                                                    <input id="form-phone_number" type="text" name="phone_number" class="form-control" required="required" data-error="Phone Number is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-email">Email *</label>
                                                                    <input id="form-email" type="email" name="email" class="form-control" required="required" data-error="Email is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-address">Sports</label>
                                                                    <input id="form-address" type="text" name="sports" placeholder="comma separated" class="form-control" data-error="Address is required.">
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-comments">Comments </label>
                                                                    <textarea id="form-comments" name="comments" class="form-control" rows="4" ></textarea>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                        </div>


                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="marketing_feedback">How did you hear about AgilityGuard?</label>
                                                                    <select name="marketing_feedback" id="marketing_feedback" >    
                                                                        <option value="" disabled selected>Select...</option>
                                                                        <option value="friend">Friend</option>
                                                                        <option value="family-dentist">Family Dentist</option>
                                                                        <option value="web-ad">Web Ad</option>                                                                        
                                                                    </select>
                                                                    <div class="help-block with-errors"></div>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="wear_frequency">How often will you use/wear AgilityGuard?</label>
                                                                    <select name="wear_frequency" id="wear_frequency">     
                                                                        <option value="" disabled selected>Select...</option>                                                                   
                                                                        <option value="daily">Daily</option>
                                                                        <option value="weekly">Weekly</option>
                                                                        <option value="monthly">Monthly</option>                                                                        
                                                                    </select>
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
                                                    Step 2 - Guard Details
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step2" class="collapse" aria-labelledby="heading2" data-parent="#accordion">
                                            <div class="card-body">


                                                <div id="guard-details">
                                                    <div class="row guard-item-order">
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="form_product">Product *</label>
                                                                <select id="form_product" name='product[]' 
                                                                    class="form-control form_product" 
                                                                    required="required" 
                                                                    data-error="Please specify your product."
                                                                    onchange="updateTotals();"
                                                                >
                                                                    <option value=""></option>
                                                                    {!!$products!!}
                                                                </select>
                                                                <div class="help-block with-errors"></div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="form-group">
                                                                <label for="form_product_type">Guard Type *</label>
                                                                <select id="form_product_type" name="product-type[]" class="form-control form_product_type" required="required" data-error="Please specify a type.">
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
                                                                <select id="form_product_color" name="product-color[]" class="form-control form_product_color" required="required" data-error="Please specify a color.">
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
                                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#step3" aria-expanded="false" aria-controls="step3">
                                                Step 3 - Choose Lab
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step3" class="collapse" aria-labelledby="heading3" data-parent="#accordion">
                                            <div class="card-body">
                                                <select name="lab" required="required" data-error="Please specify a lab.">
                                                    <option value=""></option>
                                                    @foreach( $labs as $lab )
                                                        <option value="{{$lab->id}}">{{$lab->name}}</option>                                                    
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#step4" aria-expanded="false" aria-controls="step4">
                                                    Step 4 - Shipping Info
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step4" class="collapse" aria-labelledby="heading4" data-parent="#accordion">
                                            <div class="card-body">


                                                    <div class="row">
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input form-shipto" type="radio" name="shipto" id="shipto1" value="dentist" checked>
                                                                    <label class="form-check-label" for="shipto1">
                                                                        Dentist                                                                        
                                                                    </label>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input form-shipto" type="radio" name="shipto" id="shipto2" value="patient" click="alert();updateShipToPatientField();" >
                                                                    <label class="form-check-label" for="shipto2">
                                                                        Patient
                                                                    </label>
                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <div class="form-check">
                                                                    <input class="form-check-input form-shipto" type="radio" name="shipto" id="shipto3" value="other">
                                                                    <label class="form-check-label" for="shipto3">
                                                                        Other
                                                                    </label>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                            <textarea id="shipToText" name="shipToText" class="form-control"  rows="4">{!!$dentistPortal->Name!!}&#13;&#10;{!!$dentistPortal->Address!!}&#13;&#10;{!!$dentistPortal->City!!}&#13;&#10;{!!$dentistPortal->Province!!}&#13;&#10;{!!$dentistPortal->Country!!}&#13;&#10;{!!$dentistPortal->Postal_code!!}</textarea>
                                                            </div>
                                                        </div>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link collapsed" data-toggle="collapse" data-target="#step5" aria-expanded="false" aria-controls="step5">
                                                Your Order
                                                </a>
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
                                                            
                                                            <input type="submit" class="button" value="Process Order" >
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




@section('pageFooterScripts')

<script type="text/javascript">
    var counter = 1; //how many rows of guards
    var product_type = new Array();
    var price_phi=200;
    var price_trophy=300;
    var subtotal_price;
    var last_added_price;
    var tax;
    var total_order;
    var product_obj = new Object();
    var dpShippingAddress = "{!!$dentistPortal->Name!!}\n{!!$dentistPortal->Address!!}\n{!!$dentistPortal->City!!}\n{!!$dentistPortal->Province!!}\n{!!$dentistPortal->Country!!}\n{!!$dentistPortal->Postal_code!!}";

    $(document).ready(function () {
        // $('#dtLabOrders').DataTable();
        $('.dataTables_length').addClass('bs-select');


        $('.form-shipto').click(function() {

            $('#shipToText').text('');
            $('#shipToText').removeAttr('readonly');

            if ( $(this).val() == 'dentist' )
            {
                $('#shipToText').text( dpShippingAddress );
                $('#shipToText').attr('readonly','readonly');

            } else if ( $(this).val() == 'patient' ) {

                var patientAddress = $('#form-first_name').val() + ' ' + $('#form-last_name').val() + '\n'
                    + $('#form-address').val() + '\n'
                    + $('#form-prov').val() + '\n'
                    + $('#form-country').val() + '\n'
                    + $('#form-postal').val() + ' ';

                $('#shipToText').text( patientAddress );
                
            } 
            
        });


    });

    function updateShipToPatientField()
    {
        console.log( $('#step1 input') );
    }

    function addRow(){ 
        var clonedRow = $("#guard-details .guard-item-order:first").clone(true);
        $("#guard-details").append(clonedRow);
        
        if (counter>=1){
        $("#remove_guard").show();
            counter++
        }else{
            counter++
        }

        updateTotals();

        return false;	 
    }

    function removeRow()
    {	
            if(counter!=1){
                $("#guard-details .guard-item-order:last").remove();
                
                if (counter>1){
                    product_type.pop();
                    updateTotals();
                }
                
                counter--
                
                if (counter==1){
                    $("#remove_guard").hide();	
                }
            }else{
                return false;	
            }
            
            return false;
    }


    function updateTotals()
    {
        subtotal=0;

        $("#guard-details .form_product option:selected").each(function() {

            console.log( $(this).data('msrp') );

            if ( typeof $(this).data('msrp') !== "undefined" )
            {
                subtotal += parseFloat( $(this).data('msrp') );
            }
            
        });



        //alert(subtotal);
        subtotal_price = '$'+subtotal+''; 
        tax = subtotal*0.13;
        total_order = subtotal+tax;
        
        tax_price = '$'+tax+'';
        total_order_price = '$'+total_order+'';
        
        $('#sub_total').html(subtotal_price);
        $('#sub_total2').html(subtotal_price);
        $('#form_sub').attr('value', subtotal);
        $('#taxes').html(tax_price);
        $('#form_tax').attr('value', tax);
        $('#totals').html(total_order_price);
        $('#form_total').attr('value', total_order);
    }

    </script>


@endsection