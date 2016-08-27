<section id="indicators" class="middle-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tittle-section">Indicadores</h1>
                @foreach($indicators as $indicator)
                  <div class="col-md-3 indicator">
                    <p>{!! $indicator->name!!}</p>
                    <h3 class="indicador_dato black"><strong>{!! $indicator->value!!}</strong></h3>
                    <h5 class="black"><strong>en {!! $indicator->year!!}</strong></h5>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</section>