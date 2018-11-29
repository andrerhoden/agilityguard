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
              <button type="submit" class="btn btn-primary">Search</button>
            </div>
          </form>
        </div>



      </div>
    </div>
    
    <div id="map"></div>

    <div id="mapList" class="location-listing"></div>

  
</section>  





@endsection

@section('footerScript')
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key={{$_ENV['GOOGLE_API_KEY']}}&callback=initialize">
</script>

<script>

var map, bounds, infowindow;

function initialize() {
  var points =  {!! $pageLoadDentalPractices !!};
  var defaultMapView = {lat: 43.623220, lng: -79.483930};
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
  var icon = {
    url: "/img/icons/tooth.png", // url
    scaledSize: new google.maps.Size(40, 42), // scaled size
    origin: new google.maps.Point(0,0), // origin
    anchor: new google.maps.Point(0, 0) // anchor
  };
  map = new google.maps.Map(document.getElementById('map'), {
    zoom: 2,
    center: defaultMapView,
    styles: mapStyles,
    //disableDefaultUI: true
  });
  
  loadPoints(points);
}

function loadPoints(points){
  bounds = new google.maps.LatLngBounds();
  infowindow =  new google.maps.InfoWindow({});

  for(i in points) {
    let point = points[i];
    console.log(point);
    let latLong = {lat: parseFloat(point.Lat), lng: parseFloat(point.Long)};
    let marker = new google.maps.Marker({
      position: latLong,
      map: map,
      //icon: icon,
      title: point.Name
    });
    bounds.extend(latLong);
  
    google.maps.event.addListener(marker, 'click', (function (marker, i) {
      return function () {
        let emailAddress = (points[i].EmailAddress != null) ? `<br/><a href="mailto:${ points[i].Website }">${ points[i].EmailAddress }</a>` : ``;
        let siteLink = (points[i].Website != null) ? `<br/><a href="${ points[i].Website }" target="_blank">${ points[i].Website }</a>` : ``;
        infowindow.setContent(`<h6>${ points[i].Name }</h6><p>
            ${ points[i].Address }, <br/>${ points[i].City } ${ points[i].Province }, ${ points[i].Postal_code }<br/>
            ${ points[i].Country }<br/>${ siteLink }${ emailAddress }</p>`);
        infowindow.open(map, marker);
      }
    })(marker, i));
  
  }  
  map.fitBounds(bounds);
}

function initSearch() {
  //distanceUnit

  $( "#searchMap form" ).submit(function( event ) {
    var term = $(this).find("#searchDentist").val();
    var distance = $(this).find("#distance").val();
    var unit = $(this).find("input[type='radio']:checked").val();

    var url = "http://agilityguard.localhost/api/fetchMapDentalPractices/{{$_ENV['GOOGLE_API_KEY']}}/"+term+"/"+distance+"/"+unit;
    
    $.ajax({
      url: url
    })
    .done(function( data ) {
        console.log(data.length);
        loadSearchResults(data);
    });

    event.preventDefault();
    
  });

}
function loadSearchResults(data) {
  loadPoints(data);
  $("#mapList").empty();  //Clear listing
  for(i = 0; i<data.length; i++){
    var record = data[i];
    var listitem = `<div class="row location">
                          <div class="col-md-9 col-lg-9 location-text">
                            <h3>${ record.Name }</h3>
                            <span class="address">${ record.Address }, ${ record.City } ${ record.Province }, ${ record.Postal_code }</span><br/>
                            ${ record.EnmailAddress }
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

