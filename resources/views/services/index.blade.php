@extends('layouts.app')

@section('content-backend')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary pull-right" href="{{ route('servicios.create')}}">Nuevo</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Imagen</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{!! $service->name !!}</td>
                <td>{{ Html::image($service->image, $service->name, array('class' => 'img-responsive img-thumbnail', 'style' => 'width:204px;height:auto;')) }}</td>
                <td style="width:50%">{!! $service->description !!}</td>
                <td>
                    <div class="btn-group" role="toolbar">
                        @if($service->is_private)
                            <a class="btn btn-link btn-xs" href="{{ route('servicios.change_privacity', $service->id)}}"><span class="glyphicon glyphicon-lock" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Privado" ></span></a>
                        @else
                            <a class="btn btn-link btn-xs" href="{{ route('servicios.change_privacity', $service->id)}}"><span class="glyphicon glyphicon-globe" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Público" ></span></a>
                        @endif
                        <a class="btn btn-link btn-xs" href="{{ route('servicios.show', $service->id)}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Ver" ></span></a>
                        <a class="btn btn-link btn-xs" href="{{ route('servicios.edit', $service->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
                        <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('servicios.destroy', $service->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
