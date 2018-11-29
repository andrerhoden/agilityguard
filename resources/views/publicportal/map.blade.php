@extends('layouts.publicportal.main')
@section('content')

<section class="masthead white-bg">
  <div class="container">
    <div class="row">
      <div class="col">
        <h1>Dentist Locator</h1>
      </div>
    </div>
  </div>
</section>
<section class="white-bg">
  
    
    <div class="row justify-content-md-center text-center">
      <div class="col">
        
        <p>Simply type in your zip/postal code, or city to find a Chan-certified Dentist.</p>

        <div id="searchMap" class="form row">
          <form class="col">
            <div class="form-group">
              <label for="searchDentist" class="sr-only">City</label>
              <input type="search" id="searchDentist" aria-describedby="City" placeholder="City" required>
            </div>

            <div class="form-group">
              <label for="distance" class="sr-only">Distance</label>
              <select class="form-control" id="distance" required>
                <option>1</option>
                <option>5</option>
                <option>10</option>
                <option>25</option>
                <option>50</option>
                <option>100</option>
                <option>150</option>
                <option>200</option>
              </select>
            </div>
            

            <fieldset class="form-group">
              <div class="radios">
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="distanceUnit" id="distanceUnit1" value="miles" checked>
                    miles
                  </label>
                </div>
                <div class="form-check">
                  <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="distanceUnit" id="distanceUnit2" value="km">
                    km
                  </label>
                </div>
              </div>
            </fieldset>

            <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>



      </div>
    </div>
    
    <div id="map"></div>

    <div id="mapList" class="location-listing">
 
      <div class="row location">
          <div class="col-md-9 col-lg-9 location-text">
              <h3>Waterview Dental</h3>
              <span class="address">123 Street Name Ave, Toronto ON, M3M2J9</span>
          </div>
          <div class="col-md-3 col-lg-3 location-action">
              <a href="#" class="btn btn-primary">View Website</a>
          </div>
      </div>

      <div class="row location">
          <div class="col-md-9 col-lg-9 location-text">
              <h3>Waterview Dental</h3>
              <span class="address">123 Street Name Ave, Toronto ON, M3M2J9</span>
          </div>
          <div class="col-md-3 col-lg-3 location-action">
              <a href="#" class="btn btn-primary">View Website</a>
          </div>
      </div>

      <div class="row location">
          <div class="col-md-9 col-lg-9 location-text">
              <h3>Waterview Dental</h3>
              <span class="address">123 Street Name Ave, Toronto ON, M3M2J9</span>
          </div>
          <div class="col-md-3 col-lg-3 location-action">
              <a href="#" class="btn btn-primary">View Website</a>
          </div>
      </div>

      <div class="row location">
          <div class="col-md-9 col-lg-9 location-text">
              <h3>Waterview Dental</h3>
              <span class="address">123 Street Name Ave, Toronto ON, M3M2J9</span>
          </div>
          <div class="col-md-3 col-lg-3 location-action">
              <a href="#" class="btn btn-primary">View Website</a>
          </div>
      </div>

    </div>

  
</section>  





@endsection

@section('footerScript')
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{$_ENV['GOOGLE_API_KEY']}}&callback=initialize">
</script>

<script>
function initialize() {
  //alert('this');
  var myLatLng = {lat: 43.623220, lng: -79.483930};
  var mapStyles = [
    {
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "elementType": "labels.icon",
      "stylers": [
        {
          "visibility": "off"
        }
      ]
    },
    {
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "elementType": "labels.text.stroke",
      "stylers": [
        {
          "color": "#f5f5f5"
        }
      ]
    },
    {
      "featureType": "administrative.land_parcel",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#bdbdbd"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "poi",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "poi.park",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "road",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#ffffff"
        }
      ]
    },
    {
      "featureType": "road.arterial",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#757575"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#dadada"
        }
      ]
    },
    {
      "featureType": "road.highway",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#616161"
        }
      ]
    },
    {
      "featureType": "road.local",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    },
    {
      "featureType": "transit.line",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#e5e5e5"
        }
      ]
    },
    {
      "featureType": "transit.station",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#eeeeee"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "geometry",
      "stylers": [
        {
          "color": "#c9c9c9"
        }
      ]
    },
    {
      "featureType": "water",
      "elementType": "labels.text.fill",
      "stylers": [
        {
          "color": "#9e9e9e"
        }
      ]
    }
  ];

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 2,
    center: myLatLng,
    styles: mapStyles,
    disableDefaultUI: true
  });

  var icon = {
    url: "/img/icons/tooth.png", // url
    scaledSize: new google.maps.Size(40, 42), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
  };
  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    //icon: icon,
    title: 'Hello World!'
  });
}



function initSearch() {
  //distanceUnit

  $( "#searchMap form" ).submit(function( event ) {
    var term = $(this).find("#searchDentist").val();
    var distance = $(this).find("#distance").val();
    var unit = $(this).find("input[type='radio']:checked").val();

    var url = "http://agilityguard.localhost/api/fetchMapDentalPractices/{{$_ENV['GOOGLE_API_KEY']}}/"+term+"/"+distance+"/"+unit;
    
    console.log(url);

    $.ajax({
      url: url
    })
    .done(function( data ) {
     
        console.log(data.length);
        mapSearchResults(data);
        listSearchResults(data);
       
      
    });

    event.preventDefault();
    
  });

}
function mapSearchResults(data) {
  
}
function listSearchResults(data) {
  $("#mapList").empty();  //Clear listing
  for(i = 0; i<data.length; i++){
    var record = data[i];
    var listitem = `<div class="row location">
                          <div class="col-md-9 col-lg-9 location-text">
                            <h3>${ record.Name }</h3>
                            <span class="address">${ record.Address }, ${ record.City } ${ record.Province }, ${ record.Postal_code }</span><br/>
                            ${ record.EmailAddress }
                        </div>
                        <div class="col-md-3 col-lg-3 location-action">
                            <a href="${ record.Website }" class="btn btn-primary">View Website</a>
                        </div>
                    </div>`;
    $("#mapList").append(listitem); // Add record to listing
  }
}


///api/fetchMapDentalPractices/sadf/etobicoke

initSearch();

</script>


@endsection















<?php

/*
*************************************************


<!DOCTYPE html>
<html>
  <head>
 <title>[[++site_name]] - [[*pagetitle]]</title>
<base href="[[++site_url]]" />
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<!--
 <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;sensor=false&amp;key=AIzaSyBOz6JLOgfw1dBYjUO0zB6r1cO-0dqzQkY" type="text/javascript"></script>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyAZNp7Tf-eyd52E5Oa0qFioAVPSgtiKcUI&sensor=false"></script>

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBOz6JLOgfw1dBYjUO0zB6r1cO-0dqzQkY&sensor=false"></script>
-->

<script type="text/javascript" src="//maps.googleapis.com/maps/api/js?key=AIzaSyBRGmSe7aEsjLAUYkHAtAQvhWg11_Xp28g&sensor=false"></script>



  
  <link href="/assets/css/application.css?v=2" media="screen" rel="stylesheet" type="text/css"/>
<link href="/assets/css/formatting.css?v=2" media="screen" rel="stylesheet" type="text/css"/>
  <link href="/assets/css/theme.css?v=2" media="screen" rel="stylesheet" type="text/css"/>
    <link rel="shortcut icon" href="/favicon.ico"/>

	<link href="/assets/css/locator.css?v=2" media="screen" rel="stylesheet" type="text/css"/>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  
    
 <style>
 #infoWindow{width:230px; height:300px;}
 </style> 
</head>


  

  <body class="[[*bodyClass]]">
    
    
    
        <div id='page_container'>
      
      <div id='page'>
        <div id='header'>

          <div id='header_content'>
  <h1><a href="/">Agility Guards</a></h1>
  
<div id="page_hero">[[*hero]]</div>


          
[[$nav]]

</div>

</div>
        <div id='body' class='clearfix'>
          
<!-- TEMPLATE START -->

<div id='body_content' class='clearfix no_body_content_top'>

  
  <!-- <strong>PAGE ID: 26</strong> -->
  
          
        <!-- <strong>TEMPLATE A</strong> -->
        <!-- ////////////////////////////// USE TEMPLATE A ////////////////////////////// -->
        
        <div class="template_a">
          [[*customTitle]]
          
          <div class='clearfix' id='body_content_left'>
          		[[*content]]
          
        <br/>
	<div id="map"></div>

          </div>
          <div class='clearfix' id='body_content_right'>
       			[[*rightSide]]   

<form action="location" id="search_distance" method="post"><div style="margin:0;padding:0;display:inline"><input name="authenticity_token" type="hidden" value="4gXU6/yUtDUPyZx+PjuJdraL6eJoCcyynU0jE7eoJ/I="/></div>		<div class="field">
		  <label class="text-label" for="location">Location</label>		  <input class="larger" id="location" name="location" type="text" value=""/>		</div>

		<div class="field">
			<label class="text-label" for="radius">Radius</label>
			<select id="radius_dst" name="radius[dst]"><option value="100">100</option>
<option value="10">10</option>
<option value="25">25</option>
<option value="50">50</option>
<option value="200">200</option></select>

			<input id="unit_kilometers" name="unit" type="radio" value="kilometers"/>
			<label class="radio-label" for="km">km</label>
			<input checked="checked" id="unit_miles" name="unit" type="radio" value="miles"/>
			<label class="radio-label" for="miles">miles</label>
		</div>

		<input id="search_button" name="commit" type="submit" value="Search"/>
	</form>	<div id="sidebar" style="float: left;overflow: auto; color: #000; text-align: left "></div>



          </div>
        </div>
        
        
        
    
</div>

<!-- TEMPLATE END -->
<script type="text/javascript" charset="utf-8">
	

	jQuery(document).ready(function($) {


var map;
var geocoder;
var markersArray = [];
var bounds;
var gmarkers = [];

 
function clearOverlays() {
  for (var i = 0; i < markersArray.length; i++ ) {
    markersArray[i].setMap(null);
  }
    markersArray.length = 0;
}


 function initialize() {
      map = new google.maps.Map(
        document.getElementById('map'), {
          center: new google.maps.LatLng(43.6532260, -79.3831843),
          zoom: 4,
          mapTypeId: google.maps.MapTypeId.ROADMAP
      });
	  
    }
	
    google.maps.event.addDomListener(window, 'load', initialize);







		function searchLocations(e) {
			e.preventDefault();
			$('#sidebar').html('<p>Searching ... </p>');
			//var geocoder = new GClientGeocoder();
	    	var address = $('#location').val(); 
			var radius = $('#radius_dst').val();
			var searchUrl = '/assets/services/DentistsMap/';
			$.ajax({type: 'POST', url: searchUrl, data: {
				    								addressSearch: address,
													distance: radius, 
													unit: $('input[name=unit]:checked').val(), 
				   }, success: function(data) {	
												 
				clearOverlays();
				var sidebar = $('#sidebar').html('');
				bounds = new google.maps.LatLngBounds();
				console.log(bounds);
				
				
				if (data.length > 0 ) {
					var counter = 0;
					$(data).each(function() {	
						var m = this;
						var name = m.dentist_name;
						var address = '<strong>Practice: </strong><br />' + m.dental_practice_name + '<br /><strong>Address:</strong><br />'+ m.billing_address_street + '<br />'+m.billing_address_city+', '+m.billing_address_state+', '+m.billing_address_postalcode+', '+m.billing_address_country+'<br />';
                                               
						var products = '';
						var distance = Math.round(m.distance).toFixed(2);								
						var email = '';
						
						if (m.practice_emailAddress!=''){
							email += '<strong>E-mail:</strong> '+ m.practice_emailAddress+'<br />';
						}
						var phone = '';
						
						if (m.phone_office!=''){
							phone +='<strong>Phone:</strong> '+ m.phone_office+'<br />';
						}
						
						var website = '';
						
						if (m.website!=''){
							website += '<strong>Website:</strong> '+ m.website+'<br />';	
						}
						
						if(m.products.length>0){
							products += "<strong>Products Offered:</strong><ul>";	
						}
						
						$(m.products).each(function(){
							var p = this; 
							products += "<li> "+p.name+"</li>";  						
						});
						products +="</ul>";
						
						
		        		marker = new google.maps.Marker({position: new google.maps.LatLng(m.latitude_c, m.longitude_c), map: map});
						gmarkers.push(marker);
						
						bounds.extend(new google.maps.LatLng(m.latitude_c, m.longitude_c));
						
						console.log(gmarkers[counter]);
						infowindow = new google.maps.InfoWindow();

						google.maps.event.addListener(marker, 'click', (function(marker, counter) {return function() {
 							infowindow.setContent('<h4>' + name + '</h4><br />' + address  + products + email + phone + website);
          					infowindow.open(map, marker);
       						 }
      					})(marker, counter));
						
						sidebar.append(createSidebarEntry(marker, name, address, products, distance, email, phone, website, counter));
						counter = counter+1;
						
					});
					  map.fitBounds(bounds);
				} else {
					sidebar.append("<p><strong>No locations found within this area.</strong> <br/> Please try a larger search radius.</p>");
				}
			}, error: function(request,error){alert(error);}, dataType: 'json'});
	  }

  function createSidebarEntry(marker, name, address, products, distance, email, phone, website, counter) {
			var unit = $('input[name=unit]:checked').val() == 'miles' ? ' miles' : "km";
			var div = $('<div/>')
				.html('<h4>' + name + '</h4><br />' + address  + products + email + phone + website + '<strong>Distance to you:</strong> '+ distance + unit)
				.css({
					cursor: 'pointer',
					marginBottom: '5px'
				})
				.click(function(counter) {
					//$(marker).click();
					//infoOpen(counter)
					 google.maps.event.trigger(marker, 'click');

				})	
				.hover(function() {
					$(this).css({backgroundColor: '#eee'});
				}, function() {
					$(this).css({backgroundColor: '#fff'});
				});
	    return div;
	  }	  

		$('#search_distance').submit(searchLocations);	

	});
	

</script>

        </div>
        <div id='footer'>

          <div id='footer_content'>
  <p>
    Copyright &copy; 2014 Triumphant Athletics Group. All rights reserved.
  </p>
  
  <nav id="footer_nav">
    <div><a href="/products/authentication/#using_your_warranty">Warranty</a></div>
    <div><a href="/privacy-policy">Privacy</a></div>

    <div><a href="/terms-of-use">Terms of Use</a></div>
  </nav>
  
</div>
        </div>
      </div>
    </div>
    <script src="/assets/js/jquery.js" type="text/javascript"></script>
<script src="/assets/js/jquery-ui-1.8.10.custom.min.js" type="text/javascript"></script>

<script src="/assets/js/jquery.tools.min.js" type="text/javascript"></script>
<script src="/assets/js/jquery.validate.pack.js" type="text/javascript"></script>
<script src="/assets/js/hero.js" type="text/javascript"></script>
<script src="/assets/js/login.js" type="text/javascript"></script>
<script src="/assets/js/resize.js" type="text/javascript"></script>
<script src="/assets/js/application.js" type="text/javascript"></script>

<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-18938835-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>


    
  </body>
</html>


*************************************************
*/
?>