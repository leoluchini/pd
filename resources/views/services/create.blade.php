@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'servicios.store', 'files' => true]) !!}
				@include('services.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection