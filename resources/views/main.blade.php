<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

    <title>Paddy</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

    <link href="css/nav.css" rel="stylesheet">
    <link href="css/nav-theme.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">

      <a href="#page-top"><img class="navbar-brand" src="../img/logos/paddy_brand.jpg"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fa fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#services">Servicios</a>
          </li>         
          <li class="nav-item">
            <a class="nav-link" href="#category">Categorías</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="#becourier">Sé un Paddy</a>
          </li>           
          <li class="nav-item">
              <a class="nav-link" href="#bepartner">Afilia tu Negocio</a>
          </li>
          @if (Auth::guard('web_user')->guest()    and
               Auth::guard('web_courier')->guest() and
               Auth::guard('web_partner')->guest())
              <li class="nav-item">
                <div class="portfolio-link nav-link" data-toggle="modal" href="#login-modal" style="cursor: pointer;">
                  <div class="portfolio-hover">
                    <div class="portfolio-hover-content">
                      Ingresar
                    </div>
                  </div>
                </div>
              </li>

          @elseif (!Auth::guard('web_user')->guest())
              <li class="nav-item dropdown"><a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('web_user')->users()->name }}
                  <span class="caret"></span></a>
                  <ul class="dropdown-menu" role="menu">
                      <li>
                          <a href="{{ url('/user_config') }}">
                              MI CUENTA
                          </a>
                      </li>
                      <li>
                          <a href="{{ url('/user_orders') }}">
                              MIS PEDIDOS
                          </a>                      
                      </li>
                      <li>
                          <a href="{{ url('/user_logout') }}"
                              onclick="event.preventDefault();
                                       document.getElementById('logout-form').submit();">
                              SALIR
                          </a>
                          <form id="logout-form" action="{{ url('/user_logout') }}" method="POST" style="display: none;">
                              {{ csrf_field() }}
                          </form>
                      </li>
                  </ul>
              </li>
          @elseif (!Auth::guard('web_courier')->guest())
            <form name="courier_redirect" id="courier_redirect-form" action="{{ url('/courier_home') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <script type="text/javascript">
              window.onload = function() {
                 document.forms["courier_redirect"].submit();
              }
            </script>
          @elseif (!Auth::guard('web_partner')->guest())
            <form name="partner_redirect" id="partner_redirect-form" action="{{ url('/partner_home') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
            </form>
            <script type="text/javascript">
              window.onload = function() {
                 document.forms["partner_redirect"].submit();
              }
            </script>            
          @endif          
        </ul>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-heading">DELIVERY EXPRESS!</div>
          <div class="intro-lead-in">en menos de 90 minutos</div>
          <div class="intro-lead-in">compramos y te llevamos lo que desees</div>
          <!-- <a href="#services" class="btn btn-xl">Pide tu Paddy Aquí</a> -->
          <div class="portfolio-link btn btn-xl" data-toggle="modal" href="#order-modal" style="cursor: pointer;">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                Pide tu Paddy Aquí
              </div>
            </div>
          </div>                   
        </div>        
      </div>
      <div style="text-align: left;">
        <a href='https://play.google.com/store/apps/details?id=pe.tumicro.android&hl=es&pcampaignid=MKT-Other-global-all-co-prtnr-py-PartBadge-Mar2515-1'><img style='height:100px; width:250px' alt='Disponible en Google Play' src='https://play.google.com/intl/en_us/badges/images/generic/es-419_badge_web_generic.png'/></a>
      </div>       
    </header>

    <!-- Login -->
    <div class="portfolio-modal modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <img class="navbar-brand" src="../img/logos/paddy_brand.jpg" style="width:80px; height:80px;">

                  <h1>Iniciar Sesión</h1>
                  <ul class="nav nav-tabs">
                    <li class="active"><a href="#user_login" data-toggle="tab">Usuario Paddy</a></li>
                    <li><a href="#courier_login" data-toggle="tab">Courier Paddy</a></li>
                    <li><a href="#partner_login" data-toggle="tab">Partner Paddy</a></li>
                  </ul> 

                  <div class="tab-content">
                    <div class="tab-pane active" id="user_login">
                      <br>                    
                      <form method="POST" action="{{ url('user_login') }}">                 
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input class="form-control" id="user_login_email" type="email" placeholder="Correo Electrónico" required data-validation-required-message="Correo Electrónico">
                            </div>
                            <div class="form-group">
                              <input class="form-control" id="user_login_pass" type="password" placeholder="Contraseña" required data-validation-requiered-message="Contraseña">
                              <a href="{{ url('password_reset') }}">Olvidaste  tu password?</a>
                         
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="clearfix"></div>
                          <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-xl btn-block" type="submit">INGRESAR</button>
                          </div>
                        </div>
                      </form>
                      <hr>
                      <div class="clearfix"></div>                  
                      <div class="col-lg-12 text-center">
                        Nuevo en Paddy? <a href="{{ url('user_signup') }}" class="btn btn-xl">Crear cuenta</a>
                      </div>
                    </div>

                    <div class="tab-pane" id="courier_login">
                      <br>                      
                      <form method="POST" action="{{ url('courier_login') }}">                 
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input class="form-control" id="courier_login_email" type="email" placeholder="Correo Electrónico" required data-validation-required-message="Correo Electrónico">

                            </div>
                            <div class="form-group">
                              <input class="form-control" id="courier_login_pass" type="password" placeholder="Contraseña" required data-validation-requiered-message="Contraseña">
                              <a href="{{ url('password_reset') }}">Olvidaste  tu password?</a>
                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-xl btn-block" type="submit">INGRESAR</button>
                          </div>
                        </div>
                      </form>
                      <hr>
                      <div class="clearfix"></div>                  
                      <div class="col-lg-12 text-center">
                        Nuevo en Paddy? <a href="{{ url('courier_signup') }}" class="btn btn-xl">Registro Paddy Courier</a>
                      </div>                                            
                    </div>
 
                     <div class="tab-pane" id="partner_login">
                      <br>                      
                      <form method="POST" action="{{ url('partner_login') }}">                 
                        <div class="row">
                          <div class="col-md-12">
                            <div class="form-group">
                              <input class="form-control" id="partner_login_email" type="email" placeholder="Correo Electrónico" required data-validation-required-message="Correo Electrónico">

                            </div>
                            <div class="form-group">
                              <input class="form-control" id="partner_login_pass" type="password" placeholder="Contraseña" required data-validation-requiered-message="Contraseña">
                              <a href="{{ url('password_reset') }}">Olvidaste  tu password?</a>

                            </div>
                          </div>
                          <div class="clearfix"></div>
                          <div class="col-lg-12 text-center">
                            <div id="success"></div>
                            <button class="btn btn-xl btn-block" type="submit">INGRESAR</button>
                          </div>
                        </div>
                      </form>                      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Order Type Modal -->
    <div class="portfolio-modal modal fade" id="order-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="modal-body">                          
              <div class="row">
                <div class="col-lg-6 mx-auto">
                  <h1>Recadero</h1> 
                  <img class="navbar-brand" src="../img/logos/paddy_brand.jpg" style="width:80px; height:80px;">
                  <div class="tab-content">
                    <div class="tab-pane active" id="user_login">
                      <div class="clearfix"></div>                  
                      <div class="col-lg-12 text-center">
                        <a href="{{ url('paddy_errand') }}" class="btn btn-xl">Solicitar Recadería</a>
                      </div>
                    </div>
                  </div>
                </div> 

                <div class="col-lg-6 mx-auto">
                  <h1>Mensajero</h1> 
                  <img class="navbar-brand" src="../img/logos/paddy_brand.jpg" style="width:80px; height:80px;">
                  <div class="tab-content">
                    <div class="tab-pane active" id="user_login">
                      <div class="clearfix"></div>                  
                      <div class="col-lg-12 text-center">
                        <a href="{{ url('paddy_message') }}" class="btn btn-xl">Solicitar Mensajería</a>
                      </div>
                    </div>
                  </div>
                </div>               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Services Section -->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Servicios</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Ventajas</h4>
                    <p class="text-muted">Envios multipunto</p>
                    <p class="text-muted">Atención personalizada</p>
                    <p class="text-muted">Cobro por kilometraje recorrido</p>
                </div>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">QUE ES PADDY?</h4>
                    <p class="text-muted">Un recadero de confianza. Tú pides, nosotros lo compramos y te lo llevamos</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Categorías -->
    <section class="bg-light" id="portfolio">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">Categorías</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Threads</h4>
              <p class="text-muted">Illustration</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Explore</h4>
              <p class="text-muted">Graphic Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Finish</h4>
              <p class="text-muted">Identity</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Lines</h4>
              <p class="text-muted">Branding</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Southwest</h4>
              <p class="text-muted">Website Design</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-6 portfolio-item">
            <div class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <i class="fa fa-plus fa-3x"></i>
                </div>
              </div>
              <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
            </div>
            <div class="portfolio-caption">
              <h4>Window</h4>
              <p class="text-muted">Photography</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- Se un paddy -->
    <section id="becourier">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Quieres ser un Paddy?</h2>
                    <h3 class="section-subheading text-muted">Comienza a tener un ingreso extra cada mes en tu tiempo libre y conoce la ciudad</h3>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-shopping-cart fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">¿ Qué necesitas ?</h4>
                    <p class="text-muted">Tener moto propia, celular android, ser amable, paciente y orientado al servicio</p>
                </div>
                <div class="col-md-4">                
                    <a href="{{ url('courier_signup') }}">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">Registrate Aquí</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                    </a>                
                </div>                    
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="service-heading">aa</h4>
                    <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Afilia tu Negocio -->
    <section id="bepartner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Afilia tu Negocio</h2>
                    <h3 class="section-subheading text-muted">Elije tu plan de servicio Paddy y ahorra tiempo y dinero</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 text-center">
                    <p style="color:white">Un facilitador de ventas</p>
                </div>
                <div class="col-lg-4 text-center">
                    <p style="color:white">Tus productos seran promocionados y estaran al alcance de cualquiera</p>
                </div>
                <div class="col-lg-4 text-center">
                    <p style="color:white">Planes de servicios mas comodos</p>
                </div>                                
            </div>            
            <div class="row">
                <div class="col-lg-12">
                    <form name="bepartner" id="bepartnerForm" novalidate method="POST" action="{{ url('partner_registro') }}">
                        {{ csrf_field() }}
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="RUC *" name="ruc_emp" id="ruc_emp" required data-validation-required-message="Por favor ingrese el RUC de la empresa">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Razón Social *" name="rs_emp" id="rs_emp" required data-validation-required-message="Por favor ingrese la Razón Social de la empresa">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Dirección *" name="dir_emp" id="dir_emp" required data-validation-required-message="Por favor ingrese la dirección de la empresa">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Nombre del Contacto *" name="cont_emp" id="cont_emp" required data-validation-required-message="Por favor ingrese el nombre del contacto">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Telefono *" name="telef_emp" id="telef_emp" required data-validation-required-message="Por favor ingrese el telefono de la empresa">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Correo Electrónico *" name="email_emp" id="email_emp" required data-validation-required-message="Por favor ingrese el correo electrónico de la empresa">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Porqué quieres ser parte de la plataforma" name="be" id="bepartnerwhy" required data-validation-required-message="Por favor ingresa el motivo"></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>                            
                            </div>                     
                        </div>
                        <div class="clearfix"></div>
                        <div class="col-lg-12 text-center">
                            <div id="success_emp"></div>
                            <button type="submit" class="btn btn-xl">Solicitar Afiliación</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
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
    </footer>

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Threads</li>
                    <li>Category: Illustration</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Explore</li>
                    <li>Category: Graphic Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2>Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.js"></script>
    <script src="js/nav.min.js"></script>

  </body>

</html>
