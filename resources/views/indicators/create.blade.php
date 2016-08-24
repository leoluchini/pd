@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'indicadores.store']) !!}
				@include('indicators.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection