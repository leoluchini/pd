@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
          <a href="{{ route('propio_pymes.entidades.objetos.programas.index', [$entity->id, $item->id])}}" class='btn btn-primary'  data-toggle="tooltip" data-placement="top" title="Volver"><span class="glyphicon glyphicon-chevron-left"></span></a>
        </div>
      </div>
        <h3>Programas "{{ $program->name }}" </h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
    <a href="{{ route('propio_pymes.entidades.objetos.programas.organismos.create', [$entity->id, $item->id, $program->id])}}" class="btn btn-primary pull-right">Crear Organismo</a>
    </div>
		<div class="col-md-12">
			<table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
        <tbody>
            @foreach($organizations as $organization)
            	<tr>
            		<td>{!! $organization->name !!}</td>
            		<td>
                  <a class="btn btn-link btn-xs" data-toggle="tooltip" data-placement="top" title="Ver más" href="{{ route('propio_pymes.entidades.objetos.programas.organismos.show', [$entity->id, $item->id,$program->id, $organization->id])}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  <a class="btn btn-link btn-xs" data-toggle="tooltip" data-placement="top" title="Editar" href="{{ route('propio_pymes.entidades.objetos.programas.organismos.edit', [$entity->id, $item->id, $program->id,$organization->id])}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                  <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('propio_pymes.entidades.objetos.programas.organismos.destroy', [$entity->id, $item->id, $program->id,$organization->id])}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            	</tr>
            @endforeach
        </tbody>
			</table>
		</div>
	</div>
@endsection