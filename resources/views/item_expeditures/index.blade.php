@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
          <a href="{{ route('propio_pymes.entidades.index')}}" class='btn btn-primary'  data-toggle="tooltip" data-placement="top" title="Volver"><span class="glyphicon glyphicon-chevron-left"></span></a>
        </div>
      </div>
        <h3>Objetos del gasto "{{ $entity->name }}" </h3>
      </div>
    </div>
  </div>
  <div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => ['propio_pymes.entidades.objetos.store', $entity->id], 'class' => 'form-inline']) !!}
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
            @foreach($items as $item)
            	<tr>
            		<td class="editable" data-name='name' data-url="{{route('propio_pymes.entidades.objetos.update', [ $entity->id, $item->id] )}}">{!! $item->name !!}</td>
            		<td>
                  <a class="btn btn-link btn-xs" data-toggle="tooltip" data-placement="top" title="Organismos" href="{{ route('propio_pymes.entidades.objetos.organismos.index', [$entity->id, $item->id])}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                  <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('propio_pymes.entidades.objetos.destroy', [$entity->id, $item->id])}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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