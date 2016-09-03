<section id="indicators" class="middle-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tittle-section amarillo">Indicadores</h1>
                @foreach($indicators as $indicator)
                  <div class="col-md-3 indicator">
                    <div class="nombre_indicador">
                        <h3>{!! $indicator->name!!}</h3>
                        <h5 class="black"><strong>en {!! $indicator->year!!}</strong></h5>

                    </div>
                    <h3 class="indicador_dato black">
                        <strong>{!! $indicator->value!!}</strong>
                    </h3>
                    <h3 class="descripcion_indicador">{{ $indicator->description }}</h3>
                  </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@section('javascript')
    <script type="text/javascript">
        $(function(){
            $(".indicator").matchHeight()
        })
    </script>
@endsection