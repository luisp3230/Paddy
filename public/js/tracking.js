$(document).ready(function() {

	var divMapa = document.getElementById('mapa');

    navigator.geolocation.getCurrentPosition( fn_ok, fn_mal );
    function fn_mal(){ }
  	
  	function fn_ok( rta ){
	    var geocoder = new google.maps.Geocoder;

	    var directionsService = new google.maps.DirectionsService;
	    var directionsDisplay = new google.maps.DirectionsRenderer(
	      { draggable: true,
	      });

	    var lat = rta.coords.latitude;
	    var lon = rta.coords.longitude;
	    var gLatLon = new google.maps.LatLng( lat, lon );
	    var objConfig = {
	        zoom: 15,
	        center: gLatLon,
	        mapTypeId: google.maps.MapTypeId.ROADMAP
	      }

	    var gMapa = new google.maps.Map( divMapa, objConfig );
  	}
});	