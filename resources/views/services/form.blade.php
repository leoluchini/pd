<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre :',['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('image_upload') ? ' has-error' : '' }}">
    {!! Form::label('image','Imagen:',['class' => 'control-label']) !!}
    @if($path = $service->image)
      {{ Html::image($path, $service->name, array('class' => 'img-responsive img-thumbnail', 'style' => 'width:204px;height:auto;')) }}
    @endif
    {!! Form::file('image_upload', null) !!}
    {!! $errors->first('image_upload', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripcion :',['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="checkbox">
  <label>
		{{ Form::checkbox('is_private') }} Privado?
  </label>
</div>
<div class="pull-right">
	<a href="{{ route('servicios.index')}}" class="btn btn-default">Cancelar</a>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
</div>