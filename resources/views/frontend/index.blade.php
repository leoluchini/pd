@extends('layouts.app')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="carouselPortada" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carouselPortada" data-slide-to="0" class="active"></li>
        <li data-target="#carouselPortada" data-slide-to="1" class=""></li>
        <li data-target="#carouselPortada" data-slide-to="2" class=""></li>
        <li data-target="#carouselPortada" data-slide-to="3" class=""></li>
        <li data-target="#carouselPortada" data-slide-to="4" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          {{ Html::image('images/MP-1.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
                <h1>Example headline.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-2.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
              <h1>Another example headline.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-3.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
                <h1>One more for good measure.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-4.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
                <h1>One more for good measure.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-5.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm-white.png', 'pm', array('height' => '80')) }}
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <!-- About Section -->
    <section id="about" class="middle-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1 class="tittle-section"><strong>Quienes somos</strong></h1>
                    <p class="newspaper text-justify">Somos una empresa joven que brinda servicios profesionales de excelencia, buscando siempre satisfacer de la mejor forma las necesidades de nuestros clientes. <b>Nos destacamos en el análisis y evaluación</b> global, sectorial y microeconómica. Brindamos <b>información y proyecciones</b> sobre la situación económica mundial, nacional y local, definiendo los escenarios alternativos posibles. Proporcionamos asesoramiento en <b>proyectos de inversión</b>, apoyados en un vasto conocimiento sobre las herramientas de financiamiento disponibles para adoptar <b>las mejores decisiones para su empresa</b>.</p>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    @include('frontend.services')
    
    <!-- Plan Section -->
    <section id="plan" class="full-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tittle-section"> Plan crecer</h1>
                    <p class="black"><b>Seleccione una opción de cada grupo</b> para saber cuál es el <b>plan de financiaciamiento</b> que mejor se adapta a su empresa</p>
                    <ol class="breadcrumb"></ol>
                <div id="accordion">
                  <div id="panel-accordion-1" class="panel-accordion">
                    <div class="header">
                      #1
                    </div>
                    <div class="panelContent"> 
                      <h4>Yo soy</h4>
                       <div class="list-group list-plan">
                        @foreach(App\Entity::all() as $entity)
                          <a href="{{ route('entities.topics.index', $entity->id) }}" class="list-group-item">{{ $entity->name }}</a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div  id="panel-accordion-2" class="panel-accordion">
                    <div class="header">
                      #2
                    </div>
                    <div class="panelContent">
                      <h4>Necesito financiamiento para</h4>
                      <div class="loading hide">
                        {{ HTML::image('images/ajax-loader.gif') }}
                      </div>
                      <div class="list-group list-plan">
                      </div>
                    </div>
                  </div>
                  <div  id="panel-accordion-3" class="panel-accordion">
                    <div class="header">
                      #3
                    </div>
                    <div class="panelContent">
                      <h4>Quiero financiamiento para</h4>
                      <div class="loading hide">
                        {{ HTML::image('images/ajax-loader.gif') }}
                      </div>
                      <div class="list-group list-plan">
                      </div>
                    </div>
                  </div>
                  <div class="panel-accordion">
                    <div class="header">
                      #4
                    </div>
                    <div class="panelContent">
                      <div class="list-plan">
                      </div>
                    </div>
                  </div>
              </div>
              </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section id="staff" class="staff-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12" style="border-bottom: 2px solid">
                    <h1 class="tittle-section white">Equipo</h1>
                    <div class="col-md-4">
                      <center>
                        {{ Html::image('images/equipo/pm1.jpg', '1', ['class'=>"img-circle", "height" => 150]) }}
                        <p>Sebastián Alvarez Hayes</p>
                        <ul class="list-unstyled white">
                          <li>Licenciado en economía.</li>
                          <li>Mercado de trabajo y análisis de datos</li>
                          <a href="#">{{ Html::image('images/redes_twitter.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_skype.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_linkedin.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_mail.png') }}</a>  
                        </ul>
                      </center>
                    </div>
                    <div class="col-md-4">
                      <center>
                        {{ Html::image('images/equipo/pm2.jpg', '2', ['class'=>"img-circle", "height" => 150]) }}
                        <p>Martín Pollera</p>
                        <ul class="list-unstyled white">
                          <li>Licenciado en economía.</li>
                          <li>Cadena de valor, sectores productivos, PyMEs</li>
                          <a href="#">{{ Html::image('images/redes_twitter.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_skype.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_linkedin.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_mail.png') }}</a>
                        </ul>
                      </center>
                    </div>
                    <div class="col-md-4">
                      <center>
                        {{ Html::image('images/equipo/pm3.jpg', '3', ['class'=>"img-circle", "height" => 150]) }}
                        <p>Sebastián Lucero</p>
                        <ul class="list-unstyled white">
                          <li>Licenciado en economía.</li>
                          <li>Comercio exterior y Panorama internacional</li>
                          <a href="#">{{ Html::image('images/redes_twitter.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_skype.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_linkedin.png') }}</a>
                          <a href="#">{{ Html::image('images/redes_mail.png') }}</a>
                        </ul>
                      </center>
                    </div>
                </div>
                <div class="col-lg-12">
                  <div class="col-md-4"></div>
                  <div class="col-md-4"></div>
                  <div class="col-md-4"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Indicators Section -->
    @include('frontend.indicators')

    <!-- Clients Section -->
    <section id="clients" class="middle-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1 class="titulo_seccion">Clientes</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="carousel slide multi-item-carousel" id="theCarousel" >
              <div class="carousel-inner">
                <div class="item active">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-15.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-16.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-17.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-18.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-19.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-20.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-21.png')}}" class="img-responsive"></a></div>
                </div>
                <div class="item">
                  <div class="col-xs-3"><a href="#1"><img src="{{url('images/clientes/clientes-22.png')}}" class="img-responsive"></a></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                <div class="col-md-6"></div>
                  <div class="col-md-2">
                    <h4>Secciones</h4>
                    <div class="page-footer">
                      <a class="page-scroll" href="#page-top"></a>
                      <a class="page-scroll" href="#about">Quienes Somos</a>
                      <a class="page-scroll" href="#services">Servicios</a>
                      <a class="page-scroll" href="#plan">Plan crecer</a>
                      <a class="page-scroll" href="#staff">Staff</a>
                      <a class="page-scroll" href="#indicators">Indicadores</a>
                      <a class="page-scroll" href="#clients">Nuestros Clientes</a>
                    </div>
                  </div>
                  <div class="col-md-2">
                    <h4>Seguinos</h4>
                      <a href="#" class="social facebook"><i class="fa fa-btn fa-facebook btn-social"></i></a>
                      <a href="#" class="social skype"><i class="fa fa-btn fa-skype btn-social"></i></a>
                      <a href="#" class="social linkedin"><i class="fa fa-btn fa-linkedin btn-social"></i></a>
                      <a href="#" class="social twitter"><i class="fa fa-btn fa-twitter btn-social"></i></a>
                  </div>
                  <div class="col-md-2">
                    <h4>Contacto</h4>
                      <p class="white">7 n°1554 e/516 y 517</p>
                      <p class="white">424-1843</p>
                      <p class="white">contacto@propiomarte.com</p>
                  </div>
                </div>
            </div>
        </div>
    </section>
    <section class="footer">
        <div class="container-fluid">
            <p>
                {{ Html::image('images/footer.png', 'footer', ['class' => 'footer-img']) }}
                2016 | Todos los derechos reservados 
            </p>
        </div>
    </section>
@endsection
