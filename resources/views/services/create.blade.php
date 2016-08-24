@extends('layouts.app')

@section('content-backend')
	<div class="row" style="margin-top:120px;">
		<div class="col-md-12">
			{!! Form::open(['route' => 'servicios.store', 'files' => true]) !!}
				@include('services.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection