@extends('admin.home')

@section('content')

  <script type="text/javascript">
      $(document).ready(function() {
          var d = document.getElementById("op1");
          d.className += " active";
   });
  </script>

	<div class="container">
    <div class="dashhead">

    	<div class="dashhead-titles">
        	<h6 class="dashhead-subtitle">Paddy</h6>
        	<h3 class="dashhead-title">Gestion de Motorizados</h3>
      	</div>

      <div role="tabpanel" class="tab-pane" id="sales">
        <table class="table table-bordered table-hover" id="tab_logic">
          <thead>
            <tr >
              <th class="text-center">
                #
              </th>
              <th class="text-center">
                Nombres
              </th>
              <th class="text-center">
                Apellidos
              </th>
              <th class="text-center">
                DNI
              </th>
              <th class="text-center">
                Tipo Movil
              </th>            
              <th class="text-center">
                Nro Movil
              </th>
              <th class="text-center">
                Email
              </th>   
              <th class="text-center">
                Estado
              </th>  
            </tr>
          </thead>

          <tbody>
            @foreach ( $motos as $moto )
              <tr>
                <td>
                  {{ $loop->index + 1 }}
                </td>
                <td>
                  {{ $moto->nombres }}
                </td>
                <td>
                  {{ $moto->apellidos }}
                </td>
                <td>
                  {{ $moto->dni }}
                </td>   
                <td>
                  {{ $moto->movil }}
                </td>     
                <td>
                  {{ $moto->nromovil }}
                </td> 
                <td>
                  {{ $moto->email }}
                </td>        
                <td>
                  {{ $moto->status }}
                </td>                                                              
              </tr>
            @endforeach
          </tbody>

        </table>
        </div>        
	</div>

	<br>

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