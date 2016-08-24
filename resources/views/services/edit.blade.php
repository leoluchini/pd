@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($service, ['route' => ['servicios.update', $service->id], 'method' => 'put']) !!}
				@include('services.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection