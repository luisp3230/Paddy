<!DOCTYPE html>
<html lang="en">

  <head>

      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="">
      <meta name="author" content="">

      <title>Paddy</title>
          <script src="https://cdn.pubnub.com/sdk/javascript/pubnub.4.4.1.min.js"></script>
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" />




  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

  </head>
  <body>
      <div class="container">
        <h1>PubNub Google Maps Example</h1>
        <div style="padding-left: 0, padding-right: 0">
          <div id="map-canvas" style="width:100%; height: 700px">Cargando mapa...</div>
          <script type="text/javascript">
            
            var map;            
            var mark;
            var lineCoords = [];



            var initialize = function() {
                // navigator.geolocation.getCurrentPosition(function(position) {
                //   lat = position.coords.latitude;
                //   lng = position.coords.longitude;
                // });                

              navigator.geolocation.getCurrentPosition( fn_ok, fn_mal );
              function fn_mal(){ }
              function fn_ok( rta ){

                var lat = rta.coords.latitude;
                var lon = rta.coords.longitude;

                var gLatLon = new google.maps.LatLng( lat, lon );
                
                var objConfig = {
                    zoom: 15,
                    center: gLatLon,
                    mapTypeId: google.maps.MapTypeId.ROADMAP
                  }

                var gMap = new google.maps.Map( document.getElementById('map-canvas'), objConfig );
                  mark = new google.maps.Marker({position:gLatLon, map:gMap});
                  lineCoords.push(gLatLon);
                }
            }

            window.onload = initialize;              

            var redraw = function(payload) {
              glat = payload.message.lat;
              glng = payload.message.lng;
              map.setCenter({lat:glat, lng:glng, alt:0});
              mark.setPosition({lat:glat, lng:glng, alt:0});
              lineCoords.push(new google.maps.LatLng(glat, glng));
              var lineCoordinatesPath = new google.maps.Polyline({
                path: lineCoords,
                geodesic: true,
                strokeColor: '#2E10FF'
              });
              
              lineCoordinatesPath.setMap(map);
            };

            var pnChannel = "Channel-test";
            var pubnub = new PubNub({
              publishKey: 'pub-c-4910a0d5-9543-4797-b9ee-f0daccdc5f25',
              subscribeKey: 'sub-c-82b91730-8a63-11e7-af73-96e8309537a2'
            });

            pubnub.subscribe({channels: [pnChannel]});
            pubnub.addListener({message:redraw});

            setInterval(function() {
              pubnub.publish({channel:pnChannel, message:{lat:window.lat + 0.001, lng:window.lng + 0.01}});
            }, 5000);

          </script>
        </div>
      </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js" integrity="sha384-mE6eXfrb8jxl0rzJDBRanYqgBxtJ6Unn4/1F7q4xRRyIw7Vdg9jP4ycT7x1iVsgb" crossorigin="anonymous"></script>

  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjYctHT6NnsBk1Mzb9aYktpVfEqcvJ3r0&libraries=places"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>              
  </body>
</html>