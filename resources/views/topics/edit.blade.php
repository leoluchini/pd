@extends('layouts.app-backend')

@section('content-backend')
	@include('layouts.nav-plan-crecer')
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($topic, ['route' => ['plan_crecer.topicos.update', $topic->id], 'method' => 'PUT']) !!}
				@include('topics.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection