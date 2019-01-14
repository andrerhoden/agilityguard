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
                        <a class="nav-link"  href="v/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link " href="{{$_ENV['APP_URL']}}/dentist-portal/create-order">Create Lab Order</a>
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


@if( $order->status == 'shipped' )
    <div class="alert alert-success">
        Shipped
    </div>        
@endif
@if( $order->status == 'paid' )
    <div class="alert alert-warning">
        Paid
    </div>        
@endif
@if( $order->status == 'pending_payment' )
    <div class="alert alert-danger">
        Pending Payment
    </div>        
@endif

<section class="white-bg">
    <div class="container">
        <div class="row">
            <div class="col">
        

                    <form id="order-form" method="post" action="{{$_ENV['APP_URL']}}/dentist-portal/create-order/save" role="form">
                        

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
                                                Patient Details
                                                </a>
                                            </h5>
                                        </div>
                                    
                                        <div id="step1" class="collapse show" aria-labelledby="heading1" data-parent="#accordion">
                                            <div class="card-body">

                                                    <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-first_name">First Name</label>
                                                                    <strong>{{$order->Consumer->first_name}}</strong>                                                                    
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-last_name">Last Name</label>
                                                                    <strong>{{$order->Consumer->last_name}}</strong>                                                                    
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-address">Address</label>
                                                                    <strong>{{$order->Consumer->address}}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-city">City</label>
                                                                    <strong>{{$order->Consumer->city}}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form-prov">Prov/State</label>
                                                                    <strong>{{$order->Consumer->prov}}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <label for="form-postal">Postal/Zip</label>
                                                                    <strong>{{$order->Consumer->postal}}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-country">Country</label>
                                                                    <strong>{{$order->Consumer->country}}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-phone_number">Phone Number</label>
                                                                    <strong>{{$order->Consumer->phone_number}}</strong>
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="form-email">Email</label>
                                                                    <strong>{{$order->Consumer->email}}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-address">Sports</label>
                                                                    <strong>{{$order->Consumer->sports}}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label for="form-comments">Comments </label>
                                                                    <strong>{{$order->Consumer->comments}}</strong>
                                                                </div>
                                                            </div>
                                                        </div>
                

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading2">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link" data-toggle="collapse" data-target="#step2" aria-expanded="true" aria-controls="step2">
                                                    Guard Details
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step2" class="collapse show" aria-labelledby="heading2" data-parent="#accordion">
                                            <div class="card-body">


                                               <div class="row">
                                                    <div class="col-md-4">
                                                        <div class="form-group">
                                                            <label for="form_product">Product</label>                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <label for="form_product_type">Guard Type</label>                                                                
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <label for="form_product_color">Color</label>                                                                                                                        
                                                    </div>
                                                </div>  

                                                @foreach( $order->products as $prod )

                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <strong>{{$prod->name}}</strong>
                                                    </div>
                                                    <div class="col-md-4 text-center">
                                                        <strong>{{$prod->pivot->guard_type}}</strong>
                                                    </div>
                                                    <div class="col-md-4 text-right">
                                                        <strong>{{$prod->pivot->colour}}</strong>                                                                                                                   
                                                    </div>
                                                </div>  
                                                 @endforeach
                                                                 
                                                
                                                <div class="row">
                                                    <div class="col-6">
                                                        Sub-Total:
                                                    </div>
                                                    <div class="col-6 text-right">
                                                        <span id="sub_total">$<strong>{{$order->subtotal}}</strong></h4>
                                                    </div>
                                                </div>
                                        


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading3">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link" data-toggle="collapse" data-target="#step3" aria-expanded="true" aria-controls="step3">
                                                Lab
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step3" class="collapse show" aria-labelledby="heading3" data-parent="#accordion">
                                            <div class="card-body">
                                                <strong>{{$order->Users->name}}</strong>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading4">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link" data-toggle="collapse" data-target="#step4" aria-expanded="true" aria-controls="step4">
                                                    Shipping Info
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step4" class="collapse show" aria-labelledby="heading4" data-parent="#accordion">
                                            <div class="card-body">


                                                <strong>{!! nl2br( $order->shipping_address) !!}</strong>


                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="heading5">
                                            <h5 class="mb-0">
                                                <a class="btn btn-link" data-toggle="collapse" data-target="#step5" aria-expanded="true" aria-controls="step5">
                                                Order Details
                                                </a>
                                            </h5>
                                        </div>
                                        <div id="step5" class="collapse show" aria-labelledby="heading5" data-parent="#accordion">
                                            <div class="card-body">
                                                

                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            Sub-Total:
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                            <span id="sub_total2">$<strong>{{$order->subtotal}}</strong></h4>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            Taxes:
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                                <span id="taxes">$<strong>{{$order->taxes}}</strong></span>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-6 col-md-4">
                                                            <b>Total:</b>
                                                        </div>
                                                        <div class="col-6 col-md-2 text-right">
                                                            <span id="totals">$<strong>{{$order->total}}</strong></span>
                                                        </div>
                                                    </div>
                                                    

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 
                            
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
    var dpShippingAddress = "";

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