<div class="row">
	<div class="col-md-3">
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
	    {!! Form::label('name', 'Nombre :',['class' => 'control-label']) !!}
	    {!! Form::text('name', null, ['class' => 'form-control']) !!}
	    {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
	    {!! Form::label('value', 'Valor :',['class' => 'control-label']) !!}
	    {!! Form::text('value', null, ['class' => 'form-control']) !!}
	    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group{{ $errors->has('value') ? ' has-error' : '' }}">
	    {!! Form::label('description', 'Descripción :',['class' => 'control-label']) !!}
	    {!! Form::text('description', null, ['class' => 'form-control']) !!}
	    {!! $errors->first('value', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="col-md-3">
		<div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
	    {!! Form::label('year', 'Año :',['class' => 'control-label']) !!}
	    {!! Form::text('year', null, ['class' => 'form-control']) !!}
	    {!! $errors->first('year', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
</div>
<div class="pull-right">
	<a href="{{ route('indicadores.index')}}" class="btn btn-default">Cancelar</a>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
</div>
