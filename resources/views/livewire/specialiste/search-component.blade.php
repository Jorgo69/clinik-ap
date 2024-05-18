<div class="">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input wire:model.live="query" class="form-control border-0" type="search" data-mdb-select-init data-mdb-filter="true" placeholder="Recherche">
            {{-- <input type="submit" class="btn btn-info" value="Lancer"> --}}
        </form>
        <div class="navbar-nav align-items-center ms-auto">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                    <i class="fa fa-user-md fa-2x" aria-hidden="true"></i>
                    <span class="d-none d-lg-inline-flex">{{Auth::user()->name. ' '. Auth::user()->firstname}}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                    @auth
                    <a href="{{ route('profile.edit')}}" class="dropdown-item">Profil</a>
                    <form action="{{route('logout')}}" method="post">
                        @csrf
                        <button class="dropdown-item">Deconnexion</button>                
                    </form>
                    @endauth
                    @guest
                        <a href="{{ route('login')}}" class="dropdown-item">Connexion</a>
                        <a href="{{ route('register')}}" class="dropdown-item">Inscription</a>
                    @endguest
                </div>
            </div>
        </div>    
    </nav>
    @php
        $total = count($patients);
    @endphp
    
    
    @if( Str::length($query) > 2 )
    @if($total > 0)
    <div class="row">
        <div class="card col-3 mx-5 mt-2 text-center">
        @foreach ($patients as $patient )
                <a class="text-warning" href="{{route('specialiste.detail.consultation', ['id' => $patient->id])}}">
                    {{$patient->firstname}}
                </a>
        @endforeach
        <span>
            {{$total}} resultat pour {{$query}}
        </span>
        </div>
    </div>
    @else
    <div class="row">
        <div class="card col-3 mx-5 mt-2">
            <span class="text-danger">0 resultat pour {{ $query }}</span>
        </div>
    </div>

    @endif
@endif

</div>