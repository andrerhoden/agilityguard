@extends('layouts.publicportal.main')
@section('content')


<section class="masthead white-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Testimonials</h1>
      </div>
    </div>
  </div>
</section>
<section class="white-bg">
  <div class="container ">
    <div class="row justify-content-md-center text-center">
      <div class="col col-lg-8">
        <p>No matter what your sport is, the precision crafted AgilityGuard 
        can truly help you to change your game for the better. 
        Here's what AgilityGuard users have to say:</p>
      </div>
    </div>
    <div class="row testimonial-listing">
      <div class="col">
        @if( !empty( $testimonials ) )

        @foreach ( $testimonials as $rs )

       
        <div class="row testimonial">
            <div class="d-none d-md-block col-md-3 col-lg-3">
                <img src="/img/callouts/Mouthguard-Lower-Gold-thumbnail.jpg" alt="" />  
            </div>
            <div class="col-md-9 col-lg-9 text">
                    {!! $rs["Testimony"] !!}
                    <h3>{!! $rs["Name"] !!}</h3>
                    <div class="award">{!! $rs["Awards"] !!}</div>
            </div>
            
        </div>
            
        @endforeach


        @endif

      </div>
    </div>




  </div>
</section>  

@endsection