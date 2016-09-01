{!! Form::hidden('type') !!}
<div class="row">
  <div class="col-md-6">
    <div class="form-group{{ $errors->has('full_name') ? ' has-error' : '' }}">
        {!! Form::label('full_name', 'Nombre :',['class' => 'control-label']) !!}
        {!! Form::text('full_name', null, ['class' => 'form-control']) !!}
        {!! $errors->first('full_name', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
   <div class="col-md-6">
      <div class="form-group{{ $errors->has('degree') ? ' has-error' : '' }}">
          {!! Form::label('degree', 'Título :',['class' => 'control-label']) !!}
          {!! Form::text('degree', null, ['class' => 'form-control']) !!}
          {!! $errors->first('degree', '<p class="help-block">:message</p>') !!}
      </div>
  </div>
   <div class="col-md-12">
    <div class="form-group{{ $errors->has('description') ? ' has-error' : '' }}">
        {!! Form::label('description', 'Descripcion :',['class' => 'control-label']) !!}
        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
        {!! $errors->first('description', '<p class="help-block">:message</p>') !!}
    </div>
  </div>
  @if($staff instanceof App\StaffPrimary)
    <div class="col-md-4">
      <div class="form-group{{ $errors->has('image_upload') ? ' has-error' : '' }}">
        {!! Form::label('image', 'Imagen :',['class' => 'control-label']) !!}
        @if($staff->image )
          {{ Html::image($staff->image, $staff->name, array('class' => 'img-responsive img-thumbnail form-control', 'style' => 'width:100px;height:auto;')) }}
        @endif
        {!! Form::file('image_upload', null, ['class' => 'form-control'])!!}
        {!! $errors->first('image_upload', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
    <div class="col-md-4">
      <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
          {!! Form::label('email', 'Correo electrónico :',['class' => 'control-label']) !!}
          {!! Form::text('email', null, ['class' => 'form-control']) !!}
          {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
     <div class="col-md-4">
      <div class="form-group{{ $errors->has('linkedin') ? ' has-error' : '' }}">
          {!! Form::label('linkedin', 'Linkedin :',['class' => 'control-label']) !!}
          {!! Form::text('linkedin', null, ['class' => 'form-control']) !!}
          {!! $errors->first('linkedin', '<p class="help-block">:message</p>') !!}
      </div>
    </div>
  @endif
</div>
<div class="pull-right">
	<a href="{{ route('staff.index')}}" class="btn btn-default">Cancelar</a>
	{!! Form::submit('Guardar', ['class' => 'btn btn-primary']); !!}
</div>