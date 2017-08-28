<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <title>
      
        Cuadro de Mando 
      
    </title>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
    <link href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700,400italic" rel="stylesheet">
    
      <link href="../assets/css/toolkit-inverse.css" rel="stylesheet">
    
    
    <link href="../assets/css/application.css" rel="stylesheet">

    <style>
      body {
        width: 1px;
        min-width: 100%;
        *width: 100%;
      }
    </style>

  </head>


<body>


<div class="with-iconav">

  <nav class="iconav">
    <a class="iconav-brand" href="{{ url('/') }}">
      <span class="icon icon-leaf iconav-brand-icon"></span>
    </a>
    <div class="iconav-slider">
      <ul class="nav nav-pills iconav-nav">
        <li >
           <a href="{{ url('/admin_monitor/') }}" title="Pedidos" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-text-document"></span>
            <small class="iconav-nav-label visible-xs-block">Pedidos del día</small>         
          </a>
        </li>
        <li >
          <a href="{{ url('/admin_motos/') }}" title="Motos" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-globe"></span>
            <small class="iconav-nav-label visible-xs-block">Motos</small>
          </a>
        </li>
        <li class="active">
          <a href="{{ url('/admin_clientes/') }}" title="Clientes" data-toggle="tooltip" data-placement="right" data-container="body">
            <span class="icon icon-area-graph"></span>
            <small class="iconav-nav-label visible-xs-block">Clientes</small>
          </a>
        </li>
        <li >
          <a href="{{ url('/admin_logout') }}" title="Cerrar Sesión" data-toggle="tooltip" data-placement="right" data-container="body" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
            <span class="icon icon-flash">Cerrar Sesión</span>
            <small class="iconav-nav-label visible-xs-block">EXIT</small>
          </a>
          <form id="logout-form" action="{{ url('/admin_logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
          </form>
        </li>
      </ul>
    </div>
  </nav>

        @yield('content')
</div>

  </body>
</html>