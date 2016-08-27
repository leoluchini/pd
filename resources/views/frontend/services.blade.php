<section id="services" class="full-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="tittle-section"><strong>Servicios</strong></h1>
            </div>
            @foreach($services as $service)
              <div class="col-lg-4 item-service">
                {!! Html::image($service->image, $service->name, ['class' => 'img-responsive'])!!}
                <article>
                    <h3 class="black">{!! $service->name !!}</h3>
                    <p class="cortar_texto">{!! $service->description !!}</p>
                </article>
                <hr>
              </div>
            @endforeach
        </div>
    </div>
</section>