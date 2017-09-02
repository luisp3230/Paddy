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

  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

	<link href="css/courier_signup.css" rel="stylesheet">   

</head>

<body>


	@if (Auth::guard('web_user')->guest()    and
	   Auth::guard('web_courier')->guest()   and
	   Auth::guard('web_partner')->guest())

	@elseif (!Auth::guard('web_user')->guest())

	@elseif (!Auth::guard('web_courier')->guest())

	@elseif (!Auth::guard('web_partner')->guest())

	@endif

	<div class="jumbotron" style="background-color: #34B95C !important; ">	
	<h2 class="title" style="text-align: center;">Sé un Paddy</h2>
	<div class="subhead">Forma parte de la familia de couriers que conforman Paddy</div>
	</div>

	<div class="container">        
		<section id="part1">
			<hr>
			<h4 style="text-align: center;">Términos y Condiciones</h4>
			<div class="pre-scrollable" style="max-height: 340px;">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>	

			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>			
			</div>

			<div class="row">
				<div class="col-lg-4 funkyradio">
			    	<div class="funkyradio-danger">
			        	<input type="checkbox" name="checkbox" id="checkbox_signup" 
			        			onchange="document.getElementById('begin_signup').disabled = !this.checked;"/>
			        	<label for="checkbox_signup">Aceptar términos y condiciones</label>
			    	</div>
			    </div>
			    <div class="col-lg-8" style="text-align:center; margin-top: 2em;">
					<button id="begin_signup" onclick="OnClick(this)" type="button" class="btn btn-xl btn-success" disabled="true">INICIAR REGISTRO</button>
				</div>
			</div>
		</section>	
	<!--     <div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
		    	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    	<li data-target="#myCarousel" data-slide-to="1"></li>
		    	<li data-target="#myCarousel" data-slide-to="2"></li>
		  	</ol>
			<div class="carousel-inner">
		    	<div class="active item">
		   			<img src="img/courier_signup1.jpg" style="width:100%; height:100%; max-height: 400px;">
		    	</div>
		    	<div class="item">
			    	<img src="img/courier_signup2.jpg" style="width:100%; height:100%; max-height: 400px;">
		    	</div>
		    	<div class="item">
			    	<img src="img/courier_signup3.jpg" style="width:100%; height:100%; max-height: 400px;">        	
		    	</div>
		  	</div>

			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
	    </div> -->

	    <section id="part2" style="display: none;">
			<form id="formPaddy" class="form-horizontal" role="form" method="POST" action="{{ url('courier_signup') }}">
			{{ csrf_field() }}
			<ul>
				<li id="i1">
					<div class="wrapper" style="height: 300px; margin-top: 200px;">
			        	<h3>Nombres *</h3>
						<div class="content">
							<div class="content-wrapper">
							 	<div class="input-group">
							  		<span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
							  		<input namespace="f" id="nombres_moto" name="nombres_moto" class="form-control"  type="text" onkeyup="AlDejar(this)">
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
							  		<input id="apellidos_moto" name="apellidos_moto" class="form-control"  type="text" onkeyup="AlDejar(this)">
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
								    <select id="operador_moto" name="operador_moto" onchange="AlDejar(this)">
								      <option value="" ></option>
									  <option value="1">Android( Samsung, HTC, Sony, Motorola, LG, etc)</option>
									  <option value="2">iOS(iPhone)</option>
									  <option value="3">Otro</option>
								    </select>				    
							  </div>
							  <input type="text" name="otros_operador" id="otros_operador" style='display:none;max-width: 600px'/>				  
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
							        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>    
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
							        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>								
									<input id="mail_moto" name="mail_moto" class="form-control" type="text" onblur="OnBlur(this)">
								</div>
								<p id="moto_e6"></p>					
							</div>
						</div>
					</div>
				</li>

				<li id="i7">
					<div class="wrapper" style="height: 300px;">
			        	<h3>Fecha de Nacimiento *</h3>
						<div class="content">
							<div class="content-wrapper">
								<div class="input-group">
							        <span class="input-group-addon"><i class="glyphicon glyphicon-gift"></i></span>
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
			        	<h3>Dirección *</h3>
						<div class="content">
							<div class="content-wrapper">
								<div class="input-group">
							        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>		
				    				<input class="form-control" type="text" name="dir_moto" id="dir_moto">
								</div>
								<div id="message"><span></span></div>
							</div>
						</div>
					</div>
				</li>

				<li id="i9">
					<div class="wrapper" style="height: 300px;">
			        	<h3>Distrito *</h3>
						<div class="content">
							<div class="content-wrapper">
								<div class="input-group">
							        <span class="input-group-addon"><i class="glyphicon glyphicon-road"></i></span>
				    				<select name="distrito_moto" id="distrito_moto">
			      						<option></option>
				    				@foreach ( $places as $place )
				    					<option value='{{ $place->id }}'>{{ $place->name }}</option>
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
			        	<h3>De qué tiempo dispones? *</h3>
						<div class="content">					
							<div class="content-wrapper">
								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_101" onblur="InputFunction()"/>
								        	<label for="checkbox_101">Entre semana</label>
								    	</div>
							    	</div>				    	
							    </div>
								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_102" onblur="InputFunction()"/>
								        	<label for="checkbox_102">Fines de semana</label>
								    	</div>	
							    	</div>				    	
							    </div>							    
	<!-- 							<div class="input-group">
<!									<input name="p_disp1" type="hidden" value="false">
									<input name="p_disp2" type="hidden" value="false"> -->
									
<!-- 									<input class="form-control" type="checkbox" value="1" name="p_disp1" id="p_disp1" onblur="InputFunction()">Entre semana
								</div>
								<div class="input-group">								
									<input class="form-control" type="checkbox" value="2" name="p_disp2" id="p_disp2" onblur="InputFunction()">Fines de semana
								</div> -->								
								<div id="message"><span></span></div>
							</div>
						</div>
					</div>
				</li>

				<li id="i11">
					<div class="wrapper" style="height: 300px;">
			        	<h3>Como supiste de Paddy?</h3>
						<div class="content">
							<div class="content-wrapper">
								<!-- <div class="input-group">
									<div class="control">
										<input name="p_paddyhow1" type="hidden" value="false">
										<input name="p_paddyhow2" type="hidden" value="false">
										<input name="p_paddyhow3" type="hidden" value="false">
										<input name="p_paddyhow4" type="hidden" value="false"> -->

								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_111"/>
								        	<label for="checkbox_111">Facebook</label>
								    	</div>
							    	</div>				    	
							    </div>
								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_112"/>
								        	<label for="checkbox_112">Instagram</label>
								    	</div>
							    	</div>				    	
							    </div>
								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_113"/>
								        	<label for="checkbox_113">Twitter</label>
								    	</div>
							    	</div>				    	
							    </div>	
								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_114"/>
								        	<label for="checkbox_114">A traves de un amigo</label>
								    	</div>
							    	</div>				    	
							    </div>							    						    							    
<!-- 										<input class="form-control form-control-danger" type="checkbox" value="1" name="p_paddyhow1" id="p_paddyhow1">Facebook
										<input class="form-control form-control-danger" type="checkbox" value="2" name="p_paddyhow2" id="p_paddyhow2">Instagram
										<input class="form-control form-control-danger" type="checkbox" value="3" name="p_paddyhow3" id="p_paddyhow3">Twitter
										<input class="form-control form-control-danger" type="checkbox" value="4" name="p_paddyhow4" id="p_paddyhow4">A través de un amigo -->
									<!-- </div> -->
								<!-- </div> -->
									<div id="message"><span></span></div>
							</div>
						</div>
					</div>
				</li>

				<li id="i12">
					<div class="wrapper" style="height: 300px;  margin-top: 100px">
			        	<h3>Quiero formar parte de Paddy porque deseo... *</h3>
						<div class="content">
							<div class="content-wrapper">
			<!-- 					<div class="input-group">
									<div class="control">
										<input name="p_paddywhy1" type="hidden" value="false">
										<input name="p_paddywhy2" type="hidden" value="false"> -->

								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_121"/>
								        	<label for="checkbox_121">Ser un trabajador independiente</label>
								    	</div>
							    	</div>				    	
							    </div>

								<div class="input-group">
									<div class="funkyradio">
								    	<div class="funkyradio-danger">
								        	<input type="checkbox" id="checkbox_122"/>
								        	<label for="checkbox_122">Generar ingresos adicionales al trabajo que ya tengo</label>
								    	</div>
							    	</div>				    	
							    </div>

<!-- 										<input class="form-control form-control-danger" type="checkbox" value="1" name="p_paddywhy1" id="p_paddywhy1">Ser un trabajador independiente
										<input class="form-control form-control-danger" type="checkbox" value="2" name="p_paddywhy2" id="p_paddywhy2">Generar ingresos adicionales al trabajo que ya tengo
										<input class="form-control form-control-danger" type="text" id="p_paddywhy3" onblur="InputFunction()">Otro -->
									<!-- </div> -->
								<div id="message"><span></span></div>
							</div>
						</div>
					</div>
				</li>	
			</ul>
				<div class="form-group">
					<input type="button" class="btn btn-lg btn-success btn-block" value="ENVIAR DATOS" onclick="SubmitForm()" />
				</div>
			</form>
		</section>	
	</div>

	<script type="text/javascript" src="js/courier_signup.js"></script>
    <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		
	<script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>  

</body>
</html>