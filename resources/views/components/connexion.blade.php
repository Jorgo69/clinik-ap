<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    @if (Route::has('login'))
        <div class="row d-flex">
            @auth
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
            </div>
            @else
                <a href="{{ route('login') }}" class="">Connexion</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="">Inscription</a>
                @endif
            @endauth
        </div>
    @endif
</div>