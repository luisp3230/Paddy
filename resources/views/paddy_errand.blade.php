<?php
require_once('../config.php');
?>

<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Paddy</title>

    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <!-- Custom fonts for this template -->
<!--     <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'> -->

    <!-- Custom styles for this template -->
    <!-- <link href="css/agency.min.css" rel="stylesheet"> -->
    
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <link rel="stylesheet" 
          href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" 
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" 
          crossorigin="anonymous">

    <link href="css/paddy_delivery.css" rel="stylesheet">
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

  <div name="1" id="1" class="show-hide">
    <div class="row">  
        <div class="col-xs-4 col-md-4 col-4 col-lg-4">  
          <h1>Origen</h1>
          <a href="#" class="article btn btn-xl">Siguiente Paso: Destino</a>
        </div>
        <div class="col-xs-8 col-md-8 col-8 col-lg-8">  
          <div id="mapa" class="map" style="width:100%; height: 700px"></div>
        </div>        
      </div>
  </div>

  <div name="2" id="2" style="display: none;" class="show-hide">
    <div class="row">  
        <div class="col-xs-4 col-md-4 col-4 col-lg-4">  
          <h1>Destino</h1>
          <a href="#" class="article btn btn-xl">Siguiente Paso: Pago</a>
        </div>
<!--         <div class="col-xs-8 col-md-8 col-8 col-lg-8">  
          <div id="mapa" style="width:100%; height: 700px"> Cargando mapa...</div>
        </div> -->
      </div>
  </div>

  <div name="3" id="3" style="display: none;" class="show-hide">

    <form action="{{ url('/user_charge') }}" method="POST">
      <script
        src="https://checkout.stripe.com/checkout.js" class="stripe-button"
        data-key="<?php echo $stripe['publishable_key']; ?>"
        data-amount="999"
        data-name="Demo Site"
        data-description="Widget"
        data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
        data-locale="auto"
        data-zip-code="true">
      </script>
    </form>

          <a href="#" class="article btn btn-xl">Siguiente Paso: Confirmar pedido</a>

  </div>  

    <!-- Footer -->
<!--     <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2017</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-linkedin"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="#">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer> -->

    <script type="text/javascript" 
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjYctHT6NnsBk1Mzb9aYktpVfEqcvJ3r0&libraries=places"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.js"
            integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
            crossorigin="anonymous"></script>

    <script src="js/paddy_delivery.js"></script>  

  </body>

</html>
