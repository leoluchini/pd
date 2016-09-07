<section id="services" class="full-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tittle-section amarillo"><strong>Servicios</strong></h1>
            </div>
            @foreach($services as $service)
              <div class="col-lg-4 col-md-6 item-service">
                {!! Html::image($service->image, $service->name, ['class' => 'img-responsive'])!!}
                <h3 class="black">{!! $service->name !!}</h3>
                <p>{!! $service->description !!}</p>
                <center>
                    {!! Form::open(['route' => ['servicios.suscribe', $service->id], 'method' => 'post', 'class' => 'form-inline form-service']) !!}
                        <div class="form-group">
                            {{ Form::text('email', null, [ 'class' => 'form-control' ]) }}
                            
                        </div>
                        {!! Form::submit('Suscribirse', ['class' => 'btn btn-propio'])!!}
                    {!! Form::close() !!}
                </center>
                <div class="bottom"></div>
              </div>
            @endforeach
        </div>
    </div>
</section>