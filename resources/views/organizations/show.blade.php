@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
    <div class="col-md-12">
      <div class="page-header">
        <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
          <a href="{{ route('propio_pymes.entidades.objetos.organismos.index', [$entity->id, $item->id])}}" class='btn btn-primary'  data-toggle="tooltip" data-placement="top" title="Volver"><span class="glyphicon glyphicon-chevron-left"></span></a>
        </div>
      </div>
        <h3>Organismo "{{ $organization->name }}" </h3>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <p><b>Descripci&oacute;n:</b></p>
      {!! $organization->description !!}
      <hr>
    </div>
    <div class="col-md-12">
      <p><b>Beneficio, monto y plazo:</b></p>
      {!! $organization->benefit_amount_term !!}
    </div>
  </div>
@endsection