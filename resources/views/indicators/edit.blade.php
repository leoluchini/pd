@extends('layouts.app')

@section('content-backend')
	<div class="row" style="margin-top:120px;">
		<div class="col-md-12">
			{!! Form::model($indicator, ['route' => ['indicadores.update', $indicator->id], 'method' => 'put']) !!}
				@include('indicators.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection