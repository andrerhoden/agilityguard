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
  <img src="/img/logo.png" alt="{{ setting('site.title') }}" />
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse" id="navbarNav">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span aria-hidden="true">&times;</span>
        </button>
        
        <div id="primaryMenu">
          {!! menu('main', 'bootstrap') !!}
        </div>
  

  </div>
</nav>

</header>





<!-- Page Content -->
@yield('content')


  <footer>
      <section class="blue-bg">
        <div class="container">
            <div class="row">
              <div class="col-md-4">
              <h3><img src="/img/ag-logo-white.png" class="logo" alt="Agility Guard" /></h3>
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
                  &copy; {{date('Yms')}} <span class="gold">TRIUMPHANT ATHLETICS GROUP</span> All Rights Reserved.
              </small>
            </div>
          </div>
        </div>
      </section>

  </footer>
</div>

<div class="loader">
  <div class="spinner">
    <div class="bounce1"></div>
    <div class="bounce2"></div>
    <div class="bounce3"></div>
  </div>
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

</body>  
    
</html>
