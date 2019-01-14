@extends('layouts.dentistportal.main')
@section('content')

<section class="masthead white-bg">
    <div class="container">
    <div class="row">
        <div class="col">
        <h1>Lab Orders</h1>
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
                <a class="nav-link"  href="/dentist-portal/account">Account Profile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/dentist-portal/create-order">Create Lab Order</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/dentist-portal/orders">Lab Orders</a>
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
                <table id="dtLabOrders" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                            <th class="th-sm">Lab Number
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Date Submitted
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Customer Name
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            <th class="th-sm">Status
                                <i class="fa fa-sort float-right" aria-hidden="true"></i>
                            </th>
                            </tr>
                        </thead>
                        <tbody>

                        @foreach( $orders as $order )
                            <tr>
                                <td>
                                    <a href="/dentist-portal/order/{{$order->id}}">Lab Order #{{$order->id}}</a>
                                </td>
                                <td>{{$order->created_at}}</td>
                                <td>{{$order->consumer->last_name}}, {{$order->consumer->first_name}}</td>
                                <td>{{$order->status}}</td>
                            </tr>
                        @endforeach

                        </tbody>
                        <tfoot>
                            <tr>
                            <th>Lab Number
                            </th>
                            <th>Date Submitted
                            </th>
                            <th>Customer Name
                            </th>
                            <th>Status
                            </th>
                            </tr>
                        </tfoot>
                </table> 
            </div>
        </div>
    </div>
</section>
  
@endsection