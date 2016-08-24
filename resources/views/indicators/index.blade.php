@extends('layouts.app-backend')

@section('content-backend')
    <div class="row">
        <div class="col-md-12">
            <a class="btn btn-primary pull-right" href="{{ route('indicadores.create')}}">Nuevo</a>
        </div>
    </div>
    <table id="sort" class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Año</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($indicators as $indicator)
            <tr data-update="{{ route('indicadores.change_orden', $indicator->id) }}">
                <td>{!! $indicator->name !!}</td>
                <td>{!! $indicator->value !!}</td>
                <td>{!! $indicator->year !!}</td>
                <td>
                    <div class="btn-group" role="toolbar">
                        <a class="btn btn-link btn-xs" href="{{ route('indicadores.edit', $indicator->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true" data-toggle="tooltip" data-placement="top" title="Editar" ></span></a>
                        <a class="btn btn-link btn-xs confirm-delete" data-toggle="tooltip" data-placement="top" title="Borrar" href="{{ route('indicadores.destroy', $indicator->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
