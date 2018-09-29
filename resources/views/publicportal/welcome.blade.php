<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('layouts.publicportal.head')
        @yield('pageHeaderScripts')
    </head>
    

        

    <body id="page-top">


<div class="address-bar">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 column text-left">
          <span class="group"><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:19055555555" class="highlight">905.555.5555</a></span> 
          <span class="group"><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contact@agilityguard.com" class="highlight">contact@agilityguard.com</a></span> 
        
        </div>
        <div class="col-sm-4 column text-right">
          <a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
          <a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
        </div>
      </div>
    </div>
</div>    

<div class="wrapper-container container">

  <header>

      <nav class="navbar navbar-expand-lg navbar-light">
        <a class="navbar-brand" href="index.html">
          <img src="img/logo.png" alt="Agility Guard" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse" id="navbarNav">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span aria-hidden="true">&times;</span>
              </button>
              
          <ul id="primaryMenu" class="nav navbar-nav navbar-right container text-lg-right">
            <li><a href="about.html">About Us</a></li>
            <li><a href="#">Products</a></li>
            <li><a href="#">Sports</a></li>
            <li><a href="#">Testimonials</a></li>
            <li><a href="#">Dentist Portal</a></li>
            <li><a href="#">Contact Us</a></li>
            <li><a href="#" class="button">Find a Dentist</a></li>
          </ul>




                  {!! menu('Main', 'bootstrap') !!}
        <br><Br>
        {{ setting('site.title') }}
        <br><Br>



        </div>
      </nav>

  </header>



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
          
            <div id="owl-testimonies" class="owl-carousel owl-theme">
                <div class="item">
                  <div class="testimony">
                    <h2>"I consider AgilityGuard an essential piece of equipment"</h2>
                    <h3 class="author">Giddeon Massie</h3>
                    <span class="position">2-time Olympian & 16-time National Indoor Cycling Sprint Champio</span>
                  </div>
                </div>
                <div class="item">
                    <div class="testimony">
                      <h2>"I consider AgilityGuard an essential piece of equipment"</h2>
                      <h3 class="author">Giddeon Massie</h3>
                      <span class="position">2-time Olympian & 16-time National Indoor Cycling Sprint Champio</span>
                    </div>
                  </div>
            </div>



        </div>
      </div>
     
    </div>
 
  </section>


  <footer>
      <section class="blue-bg">
        <div class="container">
            <div class="row">
              <div class="col-md-4">
                <h3><img src="img/ag-logo-white.png" class="logo" alt="Agility Guard" /></h3>
                <p>
                    Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper
                    lobortis nisl ut aliquip.
                </p>
                
              </div>
              <div class="col-md-1"></div>
              <div class="col-md-3">
                <h4>Our Products</h4>
                <ul>
                  <li><a href="#">PHI</a></li>
                  <li><a href="#">Throphy</a></li>
                  <li><a href="#">Authentication</a></li>

                </ul>
              </div>
              <div class="col-md-3">
                  <h4>Quick Links</h4>
                  <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Products</a></li>
                    <li><a href="#">Sports</a></li>
                    <li><a href="#">Testimonials</a></li>
                    <li><a href="#">Dentist Portal</a></li>
                    <li><a href="#">Contact Us</a></li>

                  </ul>
                </div>
            </div>
        </div>
      </section>
      <section class="black-bg copyright text-center">
        <div class="container">
          <div class="row">
            <div class="col">
              <small>
                  &copy; 2018 <span class="gold">TRIUMPHANT ATHLETICS GROUP</span> All Rights Reserved.
              </small>
            </div>
          </div>
        </div>
      </section>

  </footer>
</div>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="vendor/scrollreveal/scrollreveal.min.js"></script>
<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
<script src="vendor/owlcarousel/owl.carousel.min.js"></script>
<script src="vendor/colorbox/jquery.colorbox.js"></script>

<script src="https://hammerjs.github.io/dist/hammer.js"></script>

<!-- Custom scripts for this template -->
<script src="js/agility-guard.min.js"></script>

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
</body>  
    
</html>
