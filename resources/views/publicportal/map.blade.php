@extends('layouts.publicportal.main')
@section('content')

<style>
/* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
#map {
  height: 100%;
  min-height: 400px;
}
/* Optional: Makes the sample page fill the window. */
html, body {
  height: 100%;
  margin: 0;
  padding: 0;
}
</style>


<div id="map"></div>


@endsection

@section('footerScript')
<!-- Replace the value of the key parameter with your own API key. -->
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7aEgrvcIl_h6cLGOVDdA1C1nc4jUthNw&callback=initMap">
</script>

<script>
function initMap() {
  alert('this');
  var myLatLng = {lat: 43.623220, lng: -79.483930};

  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 14,
    center: myLatLng
  });

  var marker = new google.maps.Marker({
    position: myLatLng,
    map: map,
    icon: "https://maps.google.com/mapfiles/kml/shapes/parking_lot_maps.png",
    title: 'Hello World!'
  });
}
</script>


@endsection