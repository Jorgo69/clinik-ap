<div class="sidebar pe-4 pb-3">
    <nav class="navbar bg-light navbar-light">
        <a href="index.html" class="navbar-brand mx-4 mb-3">
            <h3 class="text-primary"><i class="fa fa-hashtag me-2"></i>{{config('app.name')}}</h3>
        </a>
        <div class="d-flex align-items-center ms-4 mb-4">
            <div class="position-relative">
                <i class="fa fa-user-md fa-3x" aria-hidden="true"></i>
                <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
            </div>
            <div class="ms-3">
                <h6 class="mb-0">{{Auth::user()->name. ' '. Auth::user()->firstname}}</h6>
                {{-- @if(auth()->user()->role === 'medecin' ) --}}
                <span class="text-uppercase">{{Auth::user()->role}}</span>
                {{-- @endif --}}
            </div>
        </div>
        <div class="navbar-nav w-100">      {{-- Request pour verifier le lien et routeIs pour la route [le nom] --}}
            <a href="{{ route('specialiste.index')}}" class="nav-item nav-link {{ Request::is('specialiste.index') ? 'active' : ''}}"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            @if(auth()->user()->role === 'medecin' )
            <div class="nav-item dropdown">
                <a href="#" class="nav-link {{ (request()->routeIs('specialiste.consultation.index') || request()->routeIs('specialiste.add.consultation')) ? 'active' : '' }} dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Consultation</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.consultation.index')}}" class="dropdown-item {{ request()->routeIs('specialiste.consultation.index') ? 'active' : '' }}">Liste des consultations</a>
                    <a href="{{ route('specialiste.add.consultation')}}" class="dropdown-item {{ request()->routeIs('specialiste.add.consultation') ? 'active' : '' }}">Les Consulter</a>
                </div>
            </div>
            @endif

            @if (auth()->user()->role != 'medecin')
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ (request()->routeIs('specialiste.rendez-vous.index') || request()->routeIs('specialiste.secretaire.rdv.assigner') ? 'active' : ''  )}}" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Rendez vous</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('specialiste.rendez-vous.index')}}" class="dropdown-item {{ request()->routeIs('specialiste.rendez-vous.index') ? 'active' : '' }}">Sans Assignation</a>
                    <a href="{{ route('specialiste.secretaire.rdv.assigner')}}" class="dropdown-item {{ request()->routeIs('specialiste.secretaire.rdv.assigner') ? 'active' : '' }}">Deja Assigner</a>
                    <a href="{{ route('specialiste.secretaire.rdv.honnorer')}}" class="dropdown-item {{ request()->routeIs('specialiste.secretaire.rdv.assigner') ? 'active' : '' }}">Honnorer</a>
                </div>
            </div>
            
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ (request()->routeIs('specialiste.assignation') ? 'active' : ''  )}}" data-bs-toggle="dropdown"><i class="bi bi-arrow-left-right"></i></i>Assignation</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('specialiste.assignation')}}" class="dropdown-item {{ request()->routeIs('specialiste.assignation') ? 'active' : ''}}">Assigner les RDV</a>
                    {{-- <a href="{{ route('specialiste.rendez-vous.done')}}" class="dropdown-item">Accepter</a> --}}
                </div>
            </div>
            @endif
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ (request()->routeIs('specialiste.liste.patients') || request()->routeIs('specialiste.add.patient') ? 'active' : ''  )}}" data-bs-toggle="dropdown"><i class="fab fa-accessible-icon me-2 "></i>Patients</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.liste.patients')}}" class="dropdown-item {{ request()->routeIs('specialiste.liste.patients') ? 'active' : ''}}">Tout les Patients</a>
                    <a href="{{ route('specialiste.add.patient')}}" class="dropdown-item {{ request()->routeIs('specialiste.add.patient') ? 'active' : ''}}">Nouveau Patients</a>
                </div>
            </div>
            {{-- <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-credit-card" aria-hidden="true"></i>Factures</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.facure')}}" class="dropdown-item active">Toutes les factures</a>
                    <a href="{{ route('specialiste.add.patient')}}" class="dropdown-item">Nouveau Patients</a>
                </div>
            </div> --}}
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle {{ (request()->routeIs('specialiste.facure') || request()->routeIs('specialiste.add.patient') ? 'active' : ''  )}}" data-bs-toggle="dropdown"><i class="fa fa-users" aria-hidden="true"></i></i>Personnels</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.facure')}}" class="dropdown-item active">Tous le personnel</a>
                    {{-- <a href="{{ route('specialiste.add.patient')}}" class="dropdown-item">Nouveau Patients</a> --}}
                </div>
            </div>
        </div>
    </nav>
</div>