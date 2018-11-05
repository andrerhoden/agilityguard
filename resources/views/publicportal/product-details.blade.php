@extends('layouts.publicportal.main')
@section('content')


  <section class="masthead white-bg">
          <div class="container">
            <div class="row">
              <div class="col">
                <div class="prefix">Products</div>
                <h1 class="line">{{$product->name}}</h1>
              </div>
            </div>
          </div>
      </section>

<section class="white-bg">
      <div class="container">
      
        <div class="row">
            <div class="col">
                  <p>
                    {!!$product->Body!!}
                    </p>
              </div>
          
          </div>
      </div>

     
    </section>  
  
@endsection