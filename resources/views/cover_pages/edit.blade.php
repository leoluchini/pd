@extends('layouts.app-backend')

@section('content-backend')
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			{!! Form::model($cover_page, ['route' => ['portada.update', $cover_page->id], 'method' => 'put', 'files' => true]) !!}
	      <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }}">
	          {!! Form::label('title', 'Título :',['class' => 'control-label']) !!}
	          {!! Form::text('title', null, ['class' => 'form-control']) !!}
	          {!! $errors->first('title', '<p class="help-block">:message</p>') !!}
	      </div>
		    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
		        {!! Form::label('description', 'Descripcion :',['class' => 'control-label']) !!}
		        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
		        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
		    </div>
  			<div class="form-group{{ $errors->has('image_upload') ? ' has-error' : '' }}">
	        {!! Form::label('image', 'Imagen :',['class' => 'control-label']) !!}
	        {{ Html::image($cover_page->image, $cover_page->title, array('class' => 'img-responsive img-thumbnail')) }}
	        {!! Form::file('image_upload', null, ['class' => 'form-control'])!!}
	        {!! $errors->first('image_upload', '<p class="help-block">:message</p>') !!}
      	</div>
      	<div class="pull-right">
					<a href="{{ route('portada.index')}}" class="btn btn-default">Cancelar</a>
					{!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
				</div>
			{!! Form::close() !!}
		</div>
	</div>
@endsection