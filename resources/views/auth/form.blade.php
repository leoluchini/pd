<div class="col-md-6">
    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
        {!! Form::label('name', 'Nombre', ['class' => 'control-label']) !!}
        {!! Form::text('name', null, ['class' => 'form-control']) !!}
      {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
        {!! Form::label('email', 'Email', ['class' => 'control-label']) !!}
        {!! Form::text('email', null, ['class' => 'form-control']) !!}
      {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@if( !isset($user) || !$user->exists)
<div class="col-md-6">
    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
        {!! Form::label('password', 'Contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('password', ['class' => 'form-control']) !!}
      {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
    </div>
</div>
<div class="col-md-6">
    <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
        {!! Form::label('password_confirmation', 'Confirmar contraseña', ['class' => 'control-label']) !!}
        {!! Form::password('password_confirmation', ['class' => 'form-control']) !!}
      {!! $errors->first('password_confirmation', '<p class="help-block">:message</p>') !!}
    </div>
</div>
@endif
  <div class="col-md-12">
  <div class="pull-right">
    <a href="{{ route('home') }}" class="btn btn-default">Cancelar</a>
    {!! Form::submit("Guardar", ['class' => 'btn btn-primary']) !!}
  </div>
</div>