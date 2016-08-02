@extends('layouts.app')

@section('content-backend')
    <table class="table" style="margin-top:160px;">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Valor</th>
                <th>Año</th>
            </tr>
        </thead>
        <tbody>
            @foreach($indicators as $indicator)
            <tr>
                <td>{!! $indicator->name !!}</td>
                <td>{!! $indicator->value !!}</td>
                <td>{!! $indicator->year !!}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
