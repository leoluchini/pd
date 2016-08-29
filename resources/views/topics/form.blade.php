<div class="row">
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
		  {!! Form::label('name', 'Nombre :',['class' => 'control-label']) !!}
		  {!! Form::text('name', null, ['class' => 'form-control']) !!}
		  {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
	<div class="col-md-6">
		<div class="form-group{{ $errors->has('entities') ? ' has-error' : '' }}">
		  {!! Form::label('entities', 'Entidades:',['class' => 'control-label']) !!}
		  {!! Form::select('entities[]', $entities, $currentEntities, ['multiple'=>'multiple', 'class' => 'form-control selectpicker']) !!}
		  {!! $errors->first('entities', '<p class="help-block">:message</p>') !!}
		</div>
	</div>
</div>
<div class="pull-right">
	<a class="btn btn-default" href="{{ route('plan_crecer.topicos.index') }}">Cancelar</a>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
</div>