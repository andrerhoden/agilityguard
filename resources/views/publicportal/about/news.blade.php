@extends('layouts.publicportal.main')
@section('content')

  
  <section class="masthead white-bg">
          <div class="container">
            <div class="row">
              <div class="col">
                <h1>About Us - News & Videos</h1>
              </div>
            </div>
          </div>
      </section>
        

      <section class="white-bg">
        <div class="container">
          
          @foreach( $news as $rs )

          <div class="row" style="margin-bottom:50px;">
              <div class="callout col-md-3">
                @if( !empty($rs->Image) )
                  <a href="{{$rs->Youtube}}" target="new"/>
                    <img src="{{ $_ENV['APP_URL'] .'storage/' . $rs->Image}}" />
                  </a>
                @endif
              </div>
              <div class="callout col-md-9">
                <b>
                  <a href="{{$rs->Youtube}}" target="new"/>{{$rs->Title}}</a>
                </b>
                <p>
                  {!!$rs->Summary!!}
                </p>
              </div>
          </div>

          @endforeach
        </div>
     
      </section>


@endsection