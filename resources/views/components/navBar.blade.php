<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 wow fadeIn" data-wow-delay="0.1s">
    <a href="/" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
        <h1 class="m-0 text-primary"><i class="far fa-hospital me-3"></i>Klinik</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="/" class="nav-item nav-link">Acceuil</a>
            <a href="" class="nav-item nav-link">Prendre Poste</a>
            <div class="nav-item dropdown">
                <a href="{{ route('user.espace')}}" class="nav-item nav-link">Mon Espace</a>
                <div class="dropdown-menu rounded-0 rounded-bottom m-0">
                    <a href="{{ route('user.espace')}}" class="dropdown-item">Mes Consultations</a>
                    <a href="{{ route('user.espace')}}" class="dropdown-item">Mon Carnet</a>
                    <a href="{{ route('user.espace')}}" class="dropdown-item">Messages</a>
                    <a href="/profile" class="dropdown-item">Profil</a>
                    {{-- <a href="404.html" class="dropdown-item">404 Page</a> --}}
                </div>
            </div>
            <a href="{{route('contact')}}" class="nav-item nav-link">Nous Contacter</a>
        </div>
        <a href="" class="btn btn-primary rounded-0 py-4 px-lg-4 d-none d-lg-block">Prendre un rendez-vous<i class="fa fa-arrow-right ms-3"></i></a>
    </div>
</nav>