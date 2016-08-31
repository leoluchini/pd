@extends('layouts.app-backend')

@section('content-backend')
		<div class="row">
        <div class="col-md-12">
        	<div class="dropdown  pull-right">
					  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					    Nuevo
					    <span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
					    <li><a href="{{ route('staff.create', 'primary')}}">Equipo primario</a></li>
					    <li><a href="{{ route('staff.create', 'secondary')}}">Equipo secundario</a></li>
					  </ul>
					</div>
        </div>
    </div>
    <div class="page-header">
  		<h1>Equipo Primario</h1>
		</div>
    <table class="table">
      <thead>
          <tr>
              <th>Imagen</th>
              <th>Nombre y Apellido</th>
              <th>Título</th>
              <th>Descripcion</th>
              <th>Email</th>
              <th>Linkedin</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
      	@foreach($primary_staff as $primary)
      		<tr>
      			<td>{{ Html::image($primary->image, $primary->name, array('class' => 'img-responsive img-thumbnail', 'style' => 'width:80px;height:auto;')) }}</td>
      			<td>{!! $primary->full_name !!}</td>
      			<td>{!! $primary->degree !!}</td>
      			<td>{!! $primary->description !!}</td>
      			<td>{!! $primary->email !!}</td>
      			<td>{!! $primary->linkedin !!}</td>
      			<td>
      				<a class="btn btn-link btn-xs" href="{{ route('staff.edit', $primary->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
              <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('staff.destroy', $primary->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      			</td>
      		</tr>
      	@endforeach
      </tbody>
    </table>
    <div class="page-header">
  		<h3>Equipo Secundario</h3>
		</div>
		<table class="table">
      <thead>
          <tr>
              <th>Nombre y Apellido</th>
              <th>Título</th>
              <th>Descripcion</th>
              <th>Acciones</th>
          </tr>
      </thead>
      <tbody>
      	@foreach($secondary_staff as $secondary)
      		<tr>
      			<td>{!! $secondary->full_name !!}</td>
      			<td>{!! $secondary->degree !!}</td>
      			<td>{!! $secondary->description !!}</td>
      			<td>
      				<a class="btn btn-link btn-xs" href="{{ route('staff.edit', $secondary->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
              <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('staff.destroy', $secondary->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
      			</td>
      		</tr>
      	@endforeach
      </tbody>
    </table>
@endsection