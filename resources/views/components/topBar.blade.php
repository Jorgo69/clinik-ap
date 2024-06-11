@if (Route::has('login'))
<div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
    <div class="row gx-0 d-none d-lg-flex">
        @auth

        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small> <a href="{{route('specialiste.index')}}" class="">Dashboard</a> </small>
            </div>
            <div class="h-100 d-inline-flex align-items-center py-3">
                <small class="fa fa-envelope-open text-primary me-2"></small>
                <small>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="dropdown-item">Deconnexion</button>                
                    </form>
                </small>
            </div>
        </div>

        @else

        <div class="col-lg-12 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                {{-- <small class="fa fa-phone-alt text-primary me-2"></small> --}}
                <small> <a href="{{ route('login') }}" class="">Connexion </a> </small> <i class="bi bi-slash"></i>
            @if (Route::has('register'))
                <small> <a href="{{ route('register') }}" class="">Inscription</a> </small>
            @endif
            </div>
            {{-- <div class="h-100 d-inline-flex align-items-center">
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-sm-square rounded-circle bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
            </div> --}}
        </div>
        @endauth
    </div>
</div>
@endif
