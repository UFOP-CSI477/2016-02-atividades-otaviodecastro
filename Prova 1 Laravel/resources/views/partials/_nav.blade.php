<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">

        <div class="navbar-header">


            <a class="navbar-brand" href="/">Início - Sistema de Controle de Registros em Eventos Esportivos</a>
        </div>

        <div class="collapse navbar-collapse" id="app-navbar-collapse">
             <ul class="nav navbar-nav">
                <li class="{{ Request::is('evento') ? "active" : "" }}"><a href="eventos.index">Mostrar Eventos</a></li>
                <li class=""><a href="{{ route('login')}}">Fazer login</a></li>
                <li class=""><a href="{{ route('register')}}">Registro de atletas</a></li>
           </ul>
            <ul class="nav navbar-nav navbar-right">
                @if(Auth::check())
                {{-- Check User Login  --}}
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> {{ Auth::user()->name}} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            {{-- <li><a href="{{ route ('produtos.index') }}">Produtos</a></li>
                            <li><a href="{{ route ('categoriaProdutos.index')}}">Categoria de Produtos</a></li>
                            <li><a href="{{ route ('categoriaPrecos.index')}}">Categoria de Preços</a></li> --}}
                                                    <li><a href="{{ route ('registros.index')}}">Registros</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                                <form id="logout-form" action="{{ url('/logout') }}" method="POST">
                                    {{ csrf_field() }}
                                </form>
                            </li>
                        </ul>
                    </li>

                @else


                @endif

            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>
