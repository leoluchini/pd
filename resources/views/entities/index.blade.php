@extends('layouts.app-backend')

@section('content-backend')
	@include('layouts.nav-plan-crecer')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'plan_crecer.entidades.store', 'class' => 'form-inline']) !!}
				{!! Form::text('name', null, ['class' => 'form-control']) !!}
				{!! Form::submit('Crear', ['class' => 'btn btn-primary']); !!}
			{!! Form::close() !!}
			<table id="sort" class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Acciones</th>
        </tr>
      </thead>
        <tbody>
            @foreach($entities as $entity)
            	<tr>
            		<td>{!! $entity->name !!}</td>
            		<td></td>
            	</tr>
            @endforeach
        </tbody>
			</table>
		</div>
	</div>
@endsection