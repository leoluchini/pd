<section id="plan" class="full-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tittle-section amarillo"> PropioPYME</h1>
                    <p class="black"><b>Seleccione una opción de cada grupo</b> para saber cuál es el <b>plan de financiaciamiento</b> que mejor se adapta a su empresa</p>
                    <ol class="breadcrumb">Soy </ol>
                <div id="accordion">
                  <div id="panel-accordion-1" class="panel-accordion">
                    <div class="header">
                      <p class="numeros_plancrecer">#1</p>
                    </div>
                    <div class="panelContent"> 
                      <p class="titulos_plancrecer">Soy</p>
                       <div class="list-group list-plan">
                        @foreach(App\Entity::all() as $entity)
                          <a href="{{ route('entities.topics.index', $entity->id) }}" class="list-group-item">{{ $entity->name }}</a>
                        @endforeach
                      </div>
                    </div>
                  </div>
                  <div  id="panel-accordion-2" class="panel-accordion">
                    <div class="header">
                      <p class="numeros_plancrecer">#2</p>
                    </div>
                    <div class="panelContent">
                      <p class="titulos_plancrecer">Necesito financiamiento para</p>
                      <div class="loading hide">
                        {{ HTML::image('images/ajax-loader.gif') }}
                      </div>
                      <div class="list-group list-plan">
                      </div>
                    </div>
                  </div>
                  <div  id="panel-accordion-3" class="panel-accordion">
                    <div class="header">
                      <p class="numeros_plancrecer">#3</p>
                    </div>
                    <div class="panelContent">
                      <p class="titulos_plancrecer">Quiero financiamiento para</p>
                      <div class="loading hide">
                        {{ HTML::image('images/ajax-loader.gif') }}
                      </div>
                      <div class="list-group list-plan">
                      </div>
                    </div>
                  </div>
                  <div class="panel-accordion">
                    <div class="header">
                      <p class="numeros_plancrecer">#4</p>
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