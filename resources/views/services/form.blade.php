 <div class="form-group">
    {!! Form::label('name', 'Nombre :') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Imagen') !!}
    {!! Form::file('image', null) !!}
</div>
<div class="form-group">
    {!! Form::label('description', 'Descripcion :') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
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