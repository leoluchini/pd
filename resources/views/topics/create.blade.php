@extends('layouts.app-backend')

@section('content-backend')
	@include('layouts.nav-plan-crecer')
	<div class="row">
		<div class="col-md-12">
			{!! Form::open(['route' => 'plan_crecer.topicos.store']) !!}
				@include('topics.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection