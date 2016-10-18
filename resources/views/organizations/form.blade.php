<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
    {!! Form::label('name', 'Nombre :',['class' => 'control-label']) !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
    {!! Form::label('description', 'Descripcion :',['class' => 'control-label']) !!}
    {!! Form::textarea('description', null, ['class' => 'form-control tinymce']) !!}
    {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
</div>
<div class="form-group{{ $errors->has('benefit_amount_term') ? ' has-error' : '' }}">
    {!! Form::label('benefit_amount_term', 'Beneficio, monto y plazo:',['class' => 'control-label']) !!}
    {!! Form::textarea('benefit_amount_term', null, ['class' => 'form-control tinymce']) !!}
    {!! $errors->first('benefit_amount_term', '<p class="help-block">:message</p>') !!}
</div>
<div class="pull-right">
	<a href="{{ route('propio_pymes.entidades.objetos.programas.organismos.index', [$entity->id, $item->id,$program->id])}}" class="btn btn-default">Cancelar</a>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
</div>