    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="{{ route('/') }}" class="navbar-brand page-scroll" href="#page-top">
                    <div class="row">
                        <div class="col-xs-12">
                            {{ HTML::image('images/pm.png', 'pm', array('height' => '30')) }}
                            {{ HTML::image('images/propio-marte.png', 'propio marte', array('class' => "logo",'height' => '20')) }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li class="hidden">
                            <a class="page-scroll" href="#page-top"></a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Quienes Somos</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ route('servicios.index') }}">Servicios</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#plan">Plan crecer</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#staff">Staff</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="{{ route('indicadores.index') }}">Indicadores</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#clients">Nuestros Clientes</a>
                        </li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Bienvenido {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Cerrar sesión</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>