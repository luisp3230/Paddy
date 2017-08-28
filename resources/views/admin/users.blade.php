@extends('admin.home')

@section('content')

	<div class="container">
    <div class="dashhead">

    	<div class="dashhead-titles">
        	<h6 class="dashhead-subtitle">Paddy</h6>
        	<h3 class="dashhead-title">Configuracion de Cuenta</h3>
      	</div>
	</div>

	<br>

  @foreach ( $clientes as $cliente )
    <p>Cliente Nro {{ $loop->index + 1 }}</p>
    <p>Correo {{ $cliente->email }}</p>
  @endforeach

  	<button type="button" class="btn btn-primary-outline" data-toggle="modal" data-target="#myModal">Actualizar datos</button>
	</div>

  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Actualizar Datos</h4>
        </div>
        <div class="modal-body">
        	<p></p>
        	Correo
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Guardar Cambios</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        </div>
      </div>
      
    </div>
  </div>
@endsection