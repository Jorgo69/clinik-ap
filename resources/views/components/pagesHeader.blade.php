    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                @if (request()->routeIs('aboutUs'))
                    A propos de Nous
                @endif
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index')}}">Accueil</a></li>
                    @if (request()->routeIs('aboutUs'))
                        <li class="breadcrumb-item text-primary active" aria-current="page">A propos</li>
                    @elseif(request()->routeIs('abort'))
                    <li class="breadcrumb-item text-primary active" aria-current="page">A propos</li>

                    @endif
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->