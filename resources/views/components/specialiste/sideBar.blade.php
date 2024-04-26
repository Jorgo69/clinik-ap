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
                <h6 class="mb-0">His Name</h6>
                <span>Specialiste Name</span>
            </div>
        </div>
        <div class="navbar-nav w-100">
            <a href="{{ route('specialiste.index')}}" class="nav-item nav-link active"><i class="fa fa-tachometer-alt me-2"></i>Dashboard</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="far fa-file-alt me-2"></i>Consultation</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.consultation.index')}}" class="dropdown-item">Liste des patients</a>
                    <a href="" class="dropdown-item">Nouveau patients</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Rendez vous</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{route('specialiste.rendez-vous.index')}}" class="dropdown-item active">Tout les RDV</a>
                    <a href="{{ route('specialiste.rendez-vous.done')}}" class="dropdown-item">Accepter</a>
                    <a href="element.html" class="dropdown-item">En cours</a>
                </div>
            </div>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fab fa-accessible-icon me-2 "></i>Patients</a>
                <div class="dropdown-menu bg-transparent border-0">
                    <a href="{{ route('specialiste.liste.patients')}}" class="dropdown-item active">Tout les Patients</a>
                    <a href="{{ route('specialiste.add.patient')}}" class="dropdown-item">Nouveau Patients</a>
                </div>
            </div>
        </div>
    </nav>
</div>