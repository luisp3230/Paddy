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

    <title>Registro Paddy</title>



    <!-- Bootstrap core CSS -->
    <!-- <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet"> -->

    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <link href="css/form.css" rel="stylesheet">
    <link href="css/form-theme.css" rel="stylesheet">
</head>
<body>

    <div class="container">
           
        <div class="row">
            <div class="col-lg-12 text-center">
                <img src="../img/logos/paddy_brand.jpg" style="width:80px; height:80px;"> 
                <h2 class="section-heading">Registro de Usuario</h2>
            </div>
        </div>
        <hr>

        <form name="bepartner" id="bepartnerForm" novalidate method="POST" action="{{ url('partner_registro') }}" class="form-horizontal">
            {{ csrf_field() }}

            <div class="form-group">
                <label class="control-label col-lg-2" for="name">Nombres:</label>                     
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="ruc_emp" id="name" required data-validation-required-message="Ingrese su nombre completo">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="last_name">Apellidos:</label>                          
                <div class="col-lg-4">
                    <input type="text" class="form-control" name="ruc_emp" id="last_name" required data-validation-required-message="Ingrese su apellido completo">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="dni">DNI:</label>                    
                <div class="col-lg-2">
                    <input class="form-control" type="text" name="ruc_emp" id="dni" required data-validation-required-message="Por favor ingrese su Nro de DNI">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="cel">Celular:</label>                     
                <div class="col-lg-2">                
                    <input type="text" class="form-control" name="ruc_emp" id="cel" required data-validation-required-message="Por favor ingrese su nro de Celular">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="email">Correo Electrónico:</label>                     
                <div class="col-lg-4">
                    <input type="mail" class="form-control" name="ruc_emp" id="email" required data-validation-required-message="Por favor ingrese su correo electrónico">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="email">Contraseña:</label>                     
                <div class="col-lg-4">
                    <input type="Password" class="form-control" name="ruc_emp" id="ruc_emp" required data-validation-required-message="Por favor ingrese el RUC de la empresa">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="form-group">
                <label class="control-label col-lg-2" for="email">Confirmación de Contraseña:</label>                     
                <div class="col-lg-4">
                    <input type="Password" class="form-control" name="ruc_emp" id="ruc_emp" required data-validation-required-message="Por favor ingrese el RUC de la empresa">
                </div>
                <p class="help-block text-danger"></p>
            </div>

            <div class="col-lg-12 text-center">
                Al finalizar el registro da fe que se aceptan los <a href="#" style="text-align: center;">Términos y Condiciones</a>
                <!-- <div class="g-recaptcha" data-sitekey="6LdCFC8UAAAAAMJZwcTqH4avTYseSiOF4ZdajqoS"></div> -->

                <div id="success_emp"></div>
                <button type="submit" class="btn btn-xl">Registrar</button>
            </div>
        </form>        
    </div>

    <!-- Bootstrap core JavaScript -->
<!--     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/popper/popper.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script> -->

    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <!-- <script src="js/agency.js"></script> -->
    <script src="js/nav.min.js"></script>

</body>
</html>    