<section id="plan" class="full-section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h1 class="tittle-section amarillo"><strong>Cepre Pyme</strong></h1>
      </div>
      <div class="col-md-8 col-md-offset-2">
        <ul id="progressbar">
          <li class="active first">Tama&ntilde;o de empresa</li>
          <li class="second">Objeto del cr&eacute;dito</li>
          <li class="third">Programas</li>
          <li class="fourth">Organismo</li>
          <li class="last">Resultado</li>
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
