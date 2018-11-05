@extends('layouts.publicportal.main')
@section('content')


@foreach ( $products as $product) 
  
  <a href="products/{{$product->slug}}"> {{$product->name}} </a>
  <br>
@endforeach


<section class="white-bg">
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <div class="prefix">Products</div>
              <h2 class="line">Products</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                  <p>
                      In ornare a leo ac fringilla. Sed et ex finibus, suscipit nisl vel, semper risus. Phasellus quam ligula, ornare quis nunc et, dignissim interdum ex. Phasellus rutrum urna quis nunc lobortis maximus.
                    </p>
              </div>
          
          </div>
      </div>

      <div class="team container">
        
        <div class="row team-members">
            <div class="col-sm-6 col-lg-3">
                <div class="row member">
                    <div class="col-4 col-sm-12">
                      <img src="img/team-placeholder.jpg" alt="Team Member" />
                    </div>
                    <div class="col-8 col-sm-12"> 
                      <div class="header">
                        <h3 class="left-aligned">DAVE MONTOUR</h3>
                        <span class="highlight">The Big Cheese</span>
                      </div>
                      <p>In ornare a leo ac fringilla. Sed et ex finibus, suscipit nisl vel, semper risus. Phasellus quam ligula, ornare quis nunc et, dignissim interdum ex. Phasellus rutrum urna quis nunc lobortis .</p>
                
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="row member">
                    <div class="col-4 col-sm-12">
                      <img src="img/team-placeholder.jpg" alt="Team Member" />
                    </div>
                    <div class="col-8 col-sm-12"> 
                      <div class="header">
                        <h3 class="left-aligned">DAVE MONTOUR</h3>
                        <span class="highlight">The Big Cheese</span>
                      </div>
                      <p>In ornare a leo ac fringilla. Sed et ex finibus, suscipit nisl vel, semper risus. Phasellus quam ligula, ornare quis nunc et, dignissim interdum ex. Phasellus rutrum urna quis nunc lobortis .</p>
                
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="row member">
                    <div class="col-4 col-sm-12">
                      <img src="img/team-placeholder.jpg" alt="Team Member" />
                    </div>
                    <div class="col-8 col-sm-12"> 
                      <div class="header">
                        <h3 class="left-aligned">DAVE MONTOUR</h3>
                        <span class="highlight">The Big Cheese</span>
                      </div>
                      <p>In ornare a leo ac fringilla. Sed et ex finibus, suscipit nisl vel, semper risus. Phasellus quam ligula, ornare quis nunc et, dignissim interdum ex. Phasellus rutrum urna quis nunc lobortis .</p>
                
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="row member">
                    <div class="col-4 col-sm-12">
                      <img src="img/team-placeholder.jpg" alt="Team Member" />
                    </div>
                    <div class="col-8 col-sm-12"> 
                      <div class="header">
                        <h3 class="left-aligned">DAVE MONTOUR</h3>
                        <span class="highlight">The Big Cheese</span>
                      </div>
                      <p>In ornare a leo ac fringilla. Sed et ex finibus, suscipit nisl vel, semper risus. Phasellus quam ligula, ornare quis nunc et, dignissim interdum ex. Phasellus rutrum urna quis nunc lobortis .</p>
                
                    </div>
                </div>
            </div>
            
        </div>


      </div>
    </section>  
  
@endsection