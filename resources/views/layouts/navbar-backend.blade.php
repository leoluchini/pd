    <?php $currentPath= \Request::route()->getName();?>
    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
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
                            {{ HTML::image('images/pm-yellow.png', 'pm', array('height' => '30')) }}
                            {{ HTML::image('images/propio-marte-yellow.png', 'propio marte', array('class' => "logo",'height' => '20')) }}
                        </div>
                    </div>
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <ul class="nav navbar-nav">
                        <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                        <li>
                            <a class="page-scroll" href="{{ route('portada.index') }}">Portada</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#about">Quienes Somos</a>
                        </li>
                        <li class="{{ in_array($currentPath, ['servicios.index','servicios.create','servicios.edit']) ? 'active' : '' }}">
                            <a class="page-scroll" href="{{ route('servicios.index') }}">Servicios</a>
                        </li>
                        <li class="{{ in_array($currentPath, ['plan_crecer.entidades.index','plan_crecer.entidades.create','plan_crecer.entidades.edit','plan_crecer.topicos.index','plan_crecer.topicos.create','plan_crecer.topicos.edit']) ? 'active' : '' }}">
                            <a class="page-scroll" href="{{ route('plan_crecer.entidades.index') }}">PropioPYME</a>
                        </li>
                        <li class="{{ in_array($currentPath, ['staff.index','staff.create','staff.edit']) ? 'active' : '' }}">
                            <a class="page-scroll" href="{{ route('staff.index') }}">Equipo</a>
                        </li>
                        <li class="{{ in_array($currentPath, ['indicadores.index','indicadores.create','indicadores.edit']) ? 'active' : '' }}">
                            <a class="page-scroll" href="{{ route('indicadores.index') }}">Indicadores</a>
                        </li>
                        <li>
                            <a class="page-scroll" href="#clients">Clientes</a>
                        </li>
                    </ul>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Bienvenido {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu" role="menu">
                            <li><a href="{{route('perfil')}}"><span class="glyphicon glyphicon-user"></span> Mi perfil</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesión</a></li>
                        </ul>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>