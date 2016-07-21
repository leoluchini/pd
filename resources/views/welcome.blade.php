@extends('layouts.app')

@section('content')
    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1" class=""></li>
        <li data-target="#myCarousel" data-slide-to="2" class=""></li>
        <li data-target="#myCarousel" data-slide-to="3" class=""></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          {{ Html::image('images/MP-1.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm.png', 'pm', array('height' => '80')) }}
                <h1>Example headline.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-2.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm.png', 'pm', array('height' => '80')) }}
              <h1>Another example headline.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-3.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm.png', 'pm', array('height' => '80')) }}
                <h1>One more for good measure.</h1>
            </div>
          </div>
        </div>
        <div class="item">
          {{ Html::image('images/MP-4.png') }}
          <div class="container">
            <div class="carousel-caption">
                {{ HTML::image('images/pm.png', 'pm', array('height' => '80')) }}
                <h1>One more for good measure.</h1>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->

    <!-- About Section -->
    <section id="about" class="about-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <h1>Quienes somos</h1>
                    <p class="newspaper text-justify">Somos una empresa joven que brinda servicios profesionales de excelencia, buscando siempre satisfacer de la mejor forma las necesidades de nuestros clientes. Nos destacamos en el análisis y evaluación global, sectorial y microeconómica. Brindamos información y proyecciones sobre la situación económica mundial, nacional y local, definiendo los escenarios alternativos posibles. Proporcionamos asesoramiento en proyectos de inversión, apoyados en un vasto conocimiento sobre las herramientas de financiamiento disponibles para adoptar las mejores decisiones para su empresa.</p>
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-propio">
                      <div class="panel-body">
                        <h2>Nuestros Valores</h2>
                        <ul class="list-unstyled">
                          <li>Compromiso</li>
                          <li>Conocimiento</li>
                          <li>Excelencia</li>
                          <li>Experiencia</li>
                          <li>Creatividad e innovación</li>
                          <li>Eficacia y resultados</li>
                          <li>Eficacia y resultados</li>
                          <li>Confianza y objetividad</li>
                        </ul>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section id="statistics" class="statistics-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Statistics Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Services Section</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Staff Section -->
    <section id="staff" class="staff-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Staff</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Clients Section -->
    <section id="clients" class="clients-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Clients</h1>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Contact Section</h1>
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
