<!DOCTYPE html>
<html lang="en">

<head>

	<title>Registro Paddy</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

<!--   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<link href="css/RegistroPaddy.css" rel="stylesheet">   

	<script type="text/javascript" src="js/RegistroPaddy.js"></script>

    <script type = "text/javascript"
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script> -->


</head>

<body>

    <!-- Navigation -->
    <!-- <nav id="mainNav" class="navbar navbar-default navbar-custom navbar-fixed-top"> -->
    <nav class="navbar">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span> Menu <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" style="color: white;" href="{{ url('/') }}">Paddy</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    @if (Auth::guard('web_usuario')->guest())
                        <li>
                            <a class="page-scroll" style="color: white;" href="#" data-toggle="modal" data-target="#login-modal">Ingresar</a>
                        </li>                 
                    @else
                        <li class=" dropdown"><a href="#" style="color: white;" class="dropdown-toggle active" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ Auth::guard('web_usuario')->user()->nombres }}
                            <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/usuario_cuenta') }}">
                                        MI CUENTA
                                    </a>
                                    <a href="{{ url('/usuario_cuenta') }}">
                                        MIS PEDIDOS
                                    </a>
<!--                                         <a href="{{ url('/usuario_cuenta') }}">
                                        NOTIFICACIONES 
                                    </a> -->
                                </li>

                                <li>
                                    <a href="{{ url('/usuario_logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        SALIR
                                    </a>

                                    <form id="logout-form" action="{{ url('/usuario_logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>

<div class="container">        
<h2 class="jumbotron" style="background-color: white; text-align: center;">Sé un Paddy</h1>
<form id="formPaddy" class="form-horizontal" role="form" method="POST" action="{{ url('/paddy_registro') }}">
{{ csrf_field() }}
<ul>
	<li id="i1">
		<div class="wrapper" style="height: 300px; margin-top: 200px;">
        	<h3>Nombres *</h3>
			<div class="content">
				<div class="content-wrapper">
				 	<div class="input-group">
				  		<!-- <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span> -->
				  		<input id="nombres_moto" name="nombres_moto" class="form-control"  type="text" onkeyup="AlDejar(this)">
				    </div>			    
				   	<p id="moto_e1"></p>
				</div>
			</div>
		</div>
	</li>

	<li id="i2">
		<div class="wrapper" style="height: 300px;">
        	<h3>Apellidos *</h3>        	
			<div class="content">
				<div class="content-wrapper">
				 	<div class="input-group">
				  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  		<input id="apellidos_moto" name="apellidos_moto" placeholder="Apellidos" class="form-control"  type="text" onkeyup="AlDejar(this)">
				    </div>
				   	<p id="moto_e2"></p>				    
				</div>
			</div>
		</div>
	</li>

	<li id="i3">
		<div class="wrapper" style="height: 300px;">
        	<!-- <div class="question"><span>Ingresa tu número de DNI *</span></div> -->
        	<h3>Ingresa tu número de DNI *</h3>           	
			<div class="content">
				<div class="content-wrapper">
				 	<div class="input-group">
				  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
				  		<input id="dni_moto" name="dni_moto" placeholder="DNI" class="form-control"  type="text" onkeyup="AlDejar(this)" onblur="OnBlur(this)">
				    </div>
				   	<p id="moto_e3"></p>				    
				</div>
			</div>
		</div>
	</li>

	<li id="i4">
		<div class="wrapper" style="height: 300px;">
        	<h3>Selecciona tu móvil</h3>
			<div class="content">
				<div class="content-wrapper">
				    <div class="input-group">
				        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>

				    <select id="operador_moto" name="operador_moto" class="form-control selectpicker" onchange="AlDejar(this)">
				      <option value="" ></option>
					  <option value="1">Android( Samsung, HTC, Sony, Motorola, LG, etc)</option>
					  <option value="2">iOS(iPhone)</option>
					  <option value="3">Otro</option>
				    </select>				    
				  </div>
				  <input type="text" name="otros_operador" id="otros_operador" style='display:none;'/>				  
				</div>
				<p id="moto_e4"></p>				
			</div>
		</div>
	</li>

	<li id="i5" style="left: 100px">
		<div class="wrapper" id="prueba" style="height: 300px;">
        	<!-- <div class="question"><span>Celular *</span></div> -->
        	<h3>Celular *</h3>
			<div class="content">
				<div class="content-wrapper">
				    <div class="input-group">
				  		<input id="cel_moto" name="cel_moto" placeholder="Telefono" class="form-control" type="text" onkeypress="AlDejar(this)" onkeyup="OnKeyUp(this)" onblur="OnBlur(this)">
				    </div>
				   	<p id="moto_e5"></p>
				</div>
			</div>
		</div>
	</li>

	<li id="i6">
		<div class="wrapper" style="height: 300px;">
        	<h3>Correo *</h3>
			<div class="content">
				<div class="content-wrapper">
					<div class="input-group">
						<input id="mail_moto" name="mail_moto" class="form-control" type="text" onblur="OnBlur(this)">
					</div>
					<p id="moto_e6"></p>					
				</div>
			</div>
		</div>
	</li>

	<li id="i7">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>Fecha de Nacimiento *</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="input-group">
						<input class="form-control form-control-dia" type="text" name="fecnac_dia_moto" id="fecnac_dia_moto" onkeypress="AlDejar(this,event)" onkeyup="OnKeyUp(this)">
						<input class="form-control form-control-mes" type="text" name="fecnac_mes_moto" id="fecnac_mes_moto" onkeypress="AlDejar(this,event)" onkeyup="OnKeyUp(this)")">
						<input class="form-control form-control-anio" type="text" name="fecnac_anio_moto" id="fecnac_anio_moto" onkeypress="AlDejar(this,event)" onkeyup="OnKeyUp(this)")">
					</div>
					<div id="message7"><span></span></div>
				</div>
			</div>
		</div>
	</li>

	<li id="i8">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>Dirección *</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="form-group">				
	    				<input class="form-control form-control-danger" type="text" name="dir_moto" id="dir_moto">
					</div>
					<div id="message"><span></span></div>
				</div>
			</div>
		</div>
	</li>

	<li id="i9">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>Distrito *</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="form-group">				
	    				<select class="form-control" name="distrito_moto" id="distrito_moto">
      						<option></option>
	    				@foreach ( $distritos as $distrito )
	    					<option value='{{ $distrito->id_distrito }}'>{{ $distrito->descripcion }}</option>
	    				@endforeach
    					</select>
					</div>
					<div id="message"><span></span></div>
				</div>
			</div>
		</div>
	</li>

	<li id="i10">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>De qué tiempo dispones? *</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="form-group">
						<div class="control">
								<input name="p_disp1" type="hidden" value="false">
								<input name="p_disp2" type="hidden" value="false">
								
								<input class="form-control form-control-danger" type="checkbox" value="1" name="p_disp1" id="p_disp1" onblur="InputFunction()">Entre semana
								<input class="form-control form-control-danger" type="checkbox" value="2" name="p_disp2" id="p_disp2" onblur="InputFunction()">Fines de semana								
						</div>
					</div>
					<div id="message"><span></span></div>
				</div>
			</div>
		</div>
	</li>

	<li id="i11">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>Como supiste de Paddy?</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="form-group">
						<div class="control">
							<input name="p_paddyhow1" type="hidden" value="false">
							<input name="p_paddyhow2" type="hidden" value="false">
							<input name="p_paddyhow3" type="hidden" value="false">
							<input name="p_paddyhow4" type="hidden" value="false">

							<input class="form-control form-control-danger" type="checkbox" value="1" name="p_paddyhow1" id="p_paddyhow1">Facebook
							<input class="form-control form-control-danger" type="checkbox" value="2" name="p_paddyhow2" id="p_paddyhow2">Instagram
							<input class="form-control form-control-danger" type="checkbox" value="3" name="p_paddyhow3" id="p_paddyhow3">Twitter
							<input class="form-control form-control-danger" type="checkbox" value="4" name="p_paddyhow4" id="p_paddyhow4">A través de un amigo
						</div>
					</div>
						<div id="message"><span></span></div>
				</div>
			</div>
		</div>
	</li>

	<li id="i12">
		<div class="wrapper" style="height: 300px;">
        	<div class="question"><span>Quiero formar parte de Paddy porque deseo... *</span></div>
			<div class="content">
				<div class="content-wrapper">
					<div class="form-group">
						<div class="control">
							<input name="p_paddywhy1" type="hidden" value="false">
							<input name="p_paddywhy2" type="hidden" value="false">

							<input class="form-control form-control-danger" type="checkbox" value="1" name="p_paddywhy1" id="p_paddywhy1">Ser un trabajador independiente
							<input class="form-control form-control-danger" type="checkbox" value="2" name="p_paddywhy2" id="p_paddywhy2">Generar ingresos adicionales al trabajo que ya tengo
							<input class="form-control form-control-danger" type="text" id="p_paddywhy3" onblur="InputFunction()">Otro
						</div>
						<div class="clear"></div>
					</div>
					<div id="message"><span></span></div>
				</div>
			</div>
		</div>
	</li>	
</ul>
	<div class="form-group">
		<input type="button" value="Enviar Datos" onclick="SubmitForm()" />
	</div>
</form>
</div>

</body>
</html>