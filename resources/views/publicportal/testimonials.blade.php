@extends('layouts.publicportal.main')
@section('content')

<section class="white-bg">
      <div class="container text-center">
        <div class="row">
          <div class="col">
              <div class="prefix">Testimonials</div>
              <h2 class="line">Testimonials</h2>
          </div>
        </div>
        <div class="row justify-content-md-center">
            <div class="col col-lg-8">
                  
            @if( !empty( $testimonials ) )
              
              
                @foreach ( $testimonials as $rs )
                  
                  @php dump( $rs ); @endphp

                @endforeach
              
                
            @endif

              </div>
          
          </div>
      </div>

      
    </section>  
  
@endsection