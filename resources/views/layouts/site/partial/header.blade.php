<!-- Navbar -->
<nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
    <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="{{route('site')}}">
            <strong>HABITOOS</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Left -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Quem Somos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Como Participar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Parceiros</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" target="_blank">Conheça a Plataforma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('register')}}">Afilia-se</a>
                </li>
            </ul>

            <!-- Right -->
            <ul class="navbar-nav nav-flex-icons">
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">
                        <i class="fa fa-facebook"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link" target="_blank">
                        <i class="fa fa-instagram"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('login')}}" class="nav-link border border-light rounded">
                        <i class="fa fa-id-badge mr-2"></i>Acessar Plataforma
                    </a>
                </li>
            </ul>

        </div>

    </div>
</nav>
<!-- Navbar -->