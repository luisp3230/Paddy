<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paddy</title>
    
    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
          crossorigin="anonymous">

  </head>

  <body>

    <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  Paddy
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">                
                    <li><a href="{{ url('/user_login') }}">INGRESAR</a></li>
              </ul>
          </div>
      </div>
    </nav>

    <div class="row">  
        <div class="col-xs-4 col-md-4 col-4 col-lg-4">  
          <h1>Pedido</h1>
          <p id="status">En espera..</p>
        </div>
        <div class="col-xs-8 col-md-8 col-8 col-lg-8">  
          <div id="mapa" style="width:100%; height: 700px"> Cargando mapa...</div>
        </div>        
      </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/socket.io/2.0.3/socket.io.js"></script>
    <script>
        var socket = io('http://localhost:3000');
        socket.on('user-" + $('#auth_id').val() + ":App\\Events\\EventStartOrder', function(message){
            // $('#power').text(parseInt($('#power').text()) + parseInt(message.data.power));
            document.getElementById('status').innerHTML = "En curso..";            
        });
    </script>

    <script type="text/javascript" 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjYctHT6NnsBk1Mzb9aYktpVfEqcvJ3r0&libraries=places"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <script src="js/tracking.js"></script> 
  </body>
</html>