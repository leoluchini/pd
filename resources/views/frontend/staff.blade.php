<section id="staff" class="staff-section">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="tittle-section white">Equipo</h1>
              @foreach($primary_staff as $primary)
                <div class="col-md-4">
                  <center>
                    {{ Html::image($primary->image, $primary->full_name, ['class'=>"img-circle", "height" => 150]) }}
                    <p class="equipo_nombre_socio">{{ $primary->full_name }}</p>
                    <ul class="list-unstyled white">
                      <li>{!! $primary->degree !!}</li>
                      <li>{!! $primary->description !!}</li>
                      <a href="{!! $primary->linkedin !!}" target="_blank">{{ Html::image('images/redes_linkedin.png') }}</a>
                    </ul>
                    <br>
                  </center>
                </div>
              @endforeach
          </div>
          <div class="clearfix"></div>
          <hr>
          <div class="col-lg-12">
            <center>
              @foreach($secondary_staff as $secondary)
                <div class="staff_secundario">
                  <center>
                    <h4>{!! $secondary->full_name !!}</h4>
                    <p class="white">{!! $secondary->degree !!}</p>
                    <p><small>{!! $secondary->description !!}</small></p>
                  </center>
                </div>
              @endforeach
            </center>
          </div>
      </div>
  </div>
</section>