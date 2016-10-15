<section id="plan" class="full-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="tittle-section amarillo"><strong>Propio Pyme</strong></h1>
      </div>
      <div class="col-md-6 col-md-offset-3">
        <ul id="progressbar">
          <li class="active first">Tama&ntilde;o de empresa</li>
          <li class="second">Objeto del cr&eacute;dito</li>
          <li class="third">Programas</li>
          <li class="last">Organismo</li>
        </ul>
        <div class="panel panel-default current">
          <div class="panel-body">
            <ul class="list-group">
              @foreach($entities as $entity)
                <li class="list-group-item propio-pyme" data-url="{{ route('propio_pyme', $entity->id) }}">{{ $entity->name }}</li>
              @endforeach
              </ul>
            <button class="btn btn-propio pull-right next"><span class="glyphicon glyphicon-chevron-right"></span></button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
@section('javascript')
  {!! Html::script('js/propio_pyme.js') !!}
@endsection