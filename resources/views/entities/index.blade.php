@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'propio_pymes.entidades.store', 'class' => 'form-inline']) !!}
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
            		<td class="editable" data-name='name' data-url="{{route('propio_pymes.entidades.update', $entity->id)}}">{!! $entity->name !!}</td>
            		<td>
                  <a class="btn btn-link btn-xs" data-toggle="tooltip" data-placement="top" title="Objetos del crédito" href="{{ route('propio_pymes.entidades.objetos.index', $entity->id)}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('propio_pymes.entidades.destroy', $entity->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                </td>
            	</tr>
            @endforeach
        </tbody>
			</table>
		</div>
	</div>
@endsection
@section('javascript')
  <script type="text/javascript">
    $(function(){
      $('.editable').inlineEdit()
    })
  </script>
@endsection