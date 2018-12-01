@extends('layouts.dentistportal.main')
@section('content')

<section class="masthead white-bg">
    <div class="container">
    <div class="row">
        <div class="col">
        <h1>Dashbaord</h1>
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
                        <a class="nav-link active"  href="/dentist-portal/dashboard">Dashboard</a>
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
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <div class="prefix">dashboard</div>
              <h2 class="line">Index</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                  <p>
                  dashboard

                    </p>
              </div>
          
          </div>
      </div>

      Dash
      
    </section>  
  
@endsection