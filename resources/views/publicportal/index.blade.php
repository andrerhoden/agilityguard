@extends('layouts.publicportal.main')
@section('content')

  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
            <picture>
              <source media="(max-width: 640px)" srcset="img/billboards/Christian-Homer-billboard-mobile.jpg">
              <img class="d-block w-100" src="img/billboards/Christian-Homer-billboard.jpg" alt="Add billboard text here" />
            </picture>

            <div class="carousel-text">
              <div class="row">
                  <div class="col-10 col-sm-12 col-md-7 col-lg-6">
                    <h1>
                        Dolor sit amet,
                        consectetur!</h1>
                    <h2>Subtext to go here and here</h2>
                    <a href="#" class="button">Learn more</a>
                  </div>
                </div>
            </div>
            <div class="photo-credit">
                <span class="name">Christian Homer</span>
                <span class="summary">Swimmer, Gold Medal, 50M Butterfy, 
                Singapore 2010 Youth Olympics)</span>
            </div>
        </div>

        <div class="carousel-item">
          
          <picture>
            <source media="(max-width: 640px)" srcset="img/billboards/Christian-Homer-billboard-mobile.jpg">
            <img class="d-block w-100" src="img/billboards/Christian-Homer-billboard.jpg" alt="Add billboard text here" />
          </picture>
          
              <div class="carousel-text">
                <div class="row">
                  <div class="col-10 col-sm-12 col-md-7 col-lg-6">
                      <h1>Lorem ipsum
                          dolor sit amet.</h1>
                      <h2>Subtext to go here and here</h2>
                      <a href="#" class="button">Learn more</a>
                    </div>
                  </div>
              </div>
              <div class="photo-credit">
                  <span class="name">Christian Homer</span>
                  <span class="summary">Swimmer, Gold Medal, 50M Butterfy, 
                  Singapore 2010 Youth Olympics)</span>
              </div>
          
        </div>
        <div class="carousel-item">
          <picture>
            <source media="(max-width: 640px)" srcset="img/billboards/Christian-Homer-billboard-mobile.jpg">
            <img class="d-block w-100" src="img/billboards/Christian-Homer-billboard.jpg" alt="Add billboard text here" />
          </picture>
         
              <div class="carousel-text">
                <div class="row">
                  <div class="col-10 col-sm-12 col-md-7 col-lg-6">
                      <h1>Consectetur
                          adipiscing elit.</h1>
                      <h2>Subtext to go here and here</h2>
                      <a href="#" class="button">Learn more</a>
                    </div>
                  </div>
              </div>
              <div class="photo-credit">
                  <span class="name">Christian Homer</span>
                  <span class="summary">Swimmer, Gold Medal, 50M Butterfy, 
                  Singapore 2010 Youth Olympics)</span>
              </div>
          
        </div>
      
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
                  <h2>"{{$rs['Testimony']}}"</h2>
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


@endsection