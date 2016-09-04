@extends('layouts.app-backend')

@section('content-backend')
<div class="row">
    <div class="col-md-12">
        <h2 class="page-header">{{ $user }}</h2>
    </div>
</div>

<div class="row">

  <div class="col-md-12">
    <!-- Nav tabs -->
    <?php $password = ($errors->has('old_password') || $errors->has('password') || $errors->has('password_confirmation'))?>
    <ul class="nav nav-tabs" role="tablist" style="margin-bottom: 20px">
      <li role="presentation" <?php echo !$password ? 'class=active' : '' ?> ><a href="#user" aria-controls="user" role="tab" data-toggle="tab">Editar perfil</a></li>
      <li role="presentation" <?php echo $password ? 'class=active' : '' ?>><a href="#password" aria-controls="password" role="tab" data-toggle="tab">Cambiar clave</a></li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade <?php echo !$password ? 'in active' : ''?>" id="user">
        <div class="row">
          <div class="col-md-12">
            {!! Form::model($user, ['method'=> 'PATCH', 'action' => ['ProfileController@update']]) !!}
              @include('auth.form')
            {!! Form::close() !!}
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade <?php echo $password ? 'in active' : '' ?>" id="password">
        <div class="row">
          <div class="col-md-12">
            {!! Form::model($user, ['method'=> 'PATCH', 'action' => ['ProfileController@update_password'], 'class'=> "form-horizontal"]) !!}
              @include('auth.passwords')
              <div class="col-md-9 col-md-offset-1">
                {!! Form::submit('Cambiar', ['class' => 'btn btn-danger pull-right']) !!}
              </div>
            {!! Form::close() !!}
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection