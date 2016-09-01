@extends('layouts.app-backend')

@section('content-backend')
  <table id="sort" class="table">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Título</th>
            <th>Descripcion</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
    	@foreach($cover_pages as $cover_page)
    		<tr data-update="{{ route('portada.change_orden', $cover_page->id) }}">
    			<td>{{ Html::image($cover_page->image, null, array('class' => 'img-responsive img-thumbnail', 'style' => 'width:250px;height:auto;')) }}</td>
                <td><strong>{!! $cover_page->title !!}</strong></td>
    			<td style="width: 60%">{!! $cover_page->description !!}</td>
    			<td>
    				<a class="btn btn-link btn-xs" href="{{ route('portada.edit', $cover_page->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
    			</td>
    		</tr>
    	@endforeach
    </tbody>
  </table>
@endsection