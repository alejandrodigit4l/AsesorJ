@extends('layout')

@section('content')

	<h1>Tipo Usuarios </h1>


<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
            	<!-- generate table -->
                <div class="card" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                    <div class="header">
                        <h4 class="title">Tabla de tipo usuarios</h4>
                        <p class="category">Esta tabla trae la información de los tipo usuarios que se ven en la aplicación. </p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>nombre</th>
                                    <th>Descripcion</th>
                                    <th>creado</th>
                                    <th>actualizado</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead><tbody>
                            @foreach ($list as $value)
                            	<tr>
                                    <td>{{ $value['id'] }}</td>
                                    <td>{{ $value['nombre'] }}</td>
                                    <td>{{ $value['descripcion'] }}</td>
                                    <td>{{ $value['created_at'] }}</td>
                                    <td>{{ $value['updated_at'] }}</td>
                                    <td><form action="tipoUsuario" method="POST">{{ csrf_field() }}<input type="hidden" name="id" value="{{ $value['id'] }}"><button type="submit" name="eliminar" class="btn btn-danger" value="s">X</button></form></td>
                                    <td><a href="tipoUsuarios/update/{{ $value['id'] }}"><button type="submit" name="actualizar" class="btn btn-warning" value="s"> / </button></a></td>
                                </tr>
                        	@endforeach                             
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
            <!--formulario de categoria-->
            <div class="col-md-12">
                <div class="card" style="transform: translate3d(0px, 0px, 0px); opacity: 1;">
                    <div class="header">
                        <h4 class="title">Formulario tipo usuarios </h4>
                        <p class="category">Puedes crear, actualizar o eliminar tipo usuarios</p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        @include('tipoUsuarios.create')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
	
@endsection