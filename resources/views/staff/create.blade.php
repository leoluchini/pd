@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-12">
			{!! Form::model($staff, ['route' => ['staff.store'], 'method' => 'post', 'files' => true]) !!}
				@include('staff.form')
			{!! Form::close() !!}
		</div>
	</div>
@endsection