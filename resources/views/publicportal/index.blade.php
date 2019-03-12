@extends('layouts.publicportal.main')
@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
      {!!$bannerProducts!!}
      {!!$bannerAthletes!!}
        
      
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
  </div>



  
  <section class="video-playlist white-bg">
    <div class="container">
      <div class="row">
       

      <div class="vid-main-wrapper clearfix">

          <!-- THE YOUTUBE PLAYER -->
      <div class="vid-container">
          <iframe id="vid_frame" src="https://www.youtube.com/embed/Hjfp03SO3os?rel=0&showinfo=0&autohide=1" frameborder="0" width="560" height="315"></iframe>
      </div>

      <!-- THE PLAYLIST -->
      <div class="vid-list-container">
            <ul id="vid-list">
              <li>
                <a href="https://youtube.com/embed/Hjfp03SO3os?autoplay=1&rel=0&showinfo=0&autohide=1">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/Hjfp03SO3os/default.jpg" /></span>
                  <div class="desc">AgilityGuard</div>
                </a>
              </li>
              <li>
                <a href="https://youtube.com/embed/ucM2EDQMVVI?autoplay=1&rel=0&showinfo=0&autohide=1">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/ucM2EDQMVVI/default.jpg" /></span>
                  <div class="desc">AgilityGuard - Apolo Ohno</div>
                </a>
              </li>
              <li>
                <a href="https://youtube.com/embed/rOhKllkRnJ0?autoplay=1&rel=0&showinfo=0&autohide=1">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/rOhKllkRnJ0/default.jpg" /></span>
                  <div class="desc">Beyond the Next Level</div>
                </a>
              </li>
              
              <li>
                <a href="https://www.youtube.com/embed/OvWtzxRMhkA?autoplay=1&rel=0&showinfo=0&autohide=1">
                  <span class="vid-thumb"><img width=72 src="https://img.youtube.com/vi/OvWtzxRMhkA/default.jpg" /></span>
                  <div class="desc">Check this out - AgilityGuard High Performance!</div>
                </a>
              </li>              
            </ul>
      </div>

    
</div>

      </div>
    
    </div>
  </section>


  <section id="testimonials" class="white-bg text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          
        @if( !empty( $testimonials ) )
          
          <div id="owl-testimonies" class="owl-carousel owl-theme">
            @foreach ( $testimonials as $rs )
              
              <div class="item">
                <div class="testimony">
                  <div class="testimony-text lead">{!!$rs['Testimony']!!}</div>
                  <h3 class="author">{{$rs['Name']}}</h3>
                  <span class="position">{{$rs['Awards']}}</span>
                </div>
              </div>

            @endforeach
            </div>
            
        @endif

        </div>
      </div>
     
    </div>
 
  </section>

  <section id="amateurAtheletes" class="white-bg text-center">
    <div class="container">
      <div class="row">
        <div class="col">
          
        @if( !empty( $amateurAtheletes ) )
          
          <div id="owl-amateurAtheletes" class="owl-carousel owl-theme">
            @foreach ( $amateurAtheletes as $rs )
              
              <div class="item">
                <div class="testimony">
                  <div class="testimony-text lead">
                      <img src="{{$rs}}">
                  </div>
                </div>
              </div>

            @endforeach
            </div>
            
        @endif
        <center>
        * Athletes fitted does not imply their endorsement of AgilityGuard nor use in competition.
        </center>


        </div>
      </div>
     
    </div>
 
  </section>

@endsection

@section('footerScript')
<script type="text/javascript">
  
  // Add Touch funtionality to the Bootstrao slider
  var myElement = document.getElementById('carouselExampleIndicators');
  var mc = new Hammer(myElement);
  var panning = false;
  mc.on("panleft", function(ev) {
    if(!panning){
      panning = true;
      $('.carousel').carousel('next');
    }
  });
  mc.on("panright", function(ev) {
    if(!panning){
      panning = true;
      $('.carousel').carousel('prev');
    }
  });
  mc.on("panend", function(ev) {
    panning = false;
  });

  jQuery("#vid-list li a").click(function(e){
    e.preventDefault();
    var screenWidth = jQuery(window).width();
    var link = jQuery(this).attr("href");

    if(jQuery(window).width() < 768){
      jQuery.colorbox({
        href: link,
        iframe: true, 
        innerWidth: "90%", 
        innerHeight: (screenWidth < 500) ? 250 : 350
      });
    }else{
      document.getElementById('vid_frame').src=link;
    }
    return false;
  });
</script>

@endsection