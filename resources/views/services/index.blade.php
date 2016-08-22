@extends('layouts.app')

@section('content-backend')
    <div class="row" style="margin-top:120px;">
        <div class="col-md-12">
            <a class="btn btn-primary pull-right" href="{{ route('servicios.create')}}">Nuevo</a>
        </div>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($services as $service)
            <tr>
                <td>{!! $service->name !!}</td>
                <td>{!! $service->description !!}</td>
                <td>
                    <div class="btn-group" role="toolbar">
                        <a class="btn btn-link btn-xs" href="{{ route('servicios.show', $service->id)}}"><span class="glyphicon glyphicon-eye-open" aria-hidden="true"></span></a>
                        <a class="btn btn-link btn-xs" href="{{ route('servicios.edit', $service->id)}}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                        <a class="btn btn-link btn-xs" href="{{ route('servicios.destroy', $service->id)}}"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
