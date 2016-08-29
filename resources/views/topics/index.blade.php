@extends('layouts.app-backend')

@section('content-backend')
	@include('layouts.nav-plan-crecer')
	<div class="row">
		<div class="col-md-12">
			<a class="btn btn-primary pull-right" href="{{ route('plan_crecer.topicos.create') }}">Nuevo</a>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<table id="sort" class="table">
	      <thead>
	        <tr>
	          <th>Nombre</th>
	          <th>Entidades</th>
	          <th>Acciones</th>
	        </tr>
	      </thead>
        <tbody>
            @foreach($topics as $topic)
            	<tr>
            		<td>{!! $topic->name !!}</td>
            		<td>
            			@foreach($topic->entities as $entity)
            				{!! $entity->name !!} -
            			@endforeach
            		</td>
            		<td>
            			<a class="btn btn-link btn-xs" href="{{ route('plan_crecer.topicos.edit', $topic->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
            		</td>
            	</tr>
            @endforeach
        </tbody>
			</table>
		</div>
	</div>
@endsection