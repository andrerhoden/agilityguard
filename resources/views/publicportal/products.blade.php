@extends('layouts.publicportal.main')
@section('content')


<section class="white-bg">
      <div class="container text-center">
        <div class="row">
          <div class="col">
              
              <h2 class="line">Products</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
            <p class="quote">On game-day, you expect nothing less than to put your best foot forward. <br>That’s why each AgilityGuard™ is precision-fit to exacting <br>standards designed to optimize athletic performance.</p>

            <h3 class="blue">Your Sport, Your AgilityGuard™</h3>
              </div>
          
          </div>
      </div>

      <div class="team container">
        
        <div class="row team-members">

                  
            @foreach ( $products as $product) 
              
              <div class="col-sm-6">
                  <div class="row member">
                      <div class="col-sm-12">
                      
                        <img src="{{$product->imagesFullPath[0]}}" alt="Team Member" />
                      </div>
                      <div class="col-sm-12"> 
                        <div class="header">
                          <h3 class="left-aligned"><a href="products/{{$product->slug}}"> {{$product->name}} </a></h3>
                        </div>
                        {!!$product->Summary!!} 
                      </div>
                  </div>
              </div>
            @endforeach

            
            
        </div>


      </div>
    </section>  
  
@endsection