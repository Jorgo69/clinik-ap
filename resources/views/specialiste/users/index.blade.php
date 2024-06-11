<x-specialiste>
    
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
    
    
        <!-- Sidebar Start -->
        @include('components.specialiste.sideBar')
        <!-- Sidebar End -->
    
    
        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            @include('components.specialiste.navBarContent')
            <!-- Navbar End -->    
    
            <div class="container-fluid pt-4 px-4">
                <div class="bg-light rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">
                    @if (Session::has('update'))
                        <div class="alert alert-info text-center">
                        {{Session::get('update') }}
                        <a href="" class="float-end"> X</a>
                        </div>
                    @endif
                    @if (Session::has('danger'))
                        <div class="alert alert-danger text-center">
                        {{Session::get('danger') }}
                        <a href="" class="float-end"> X</a>
                        </div>
                    @endif
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">
                            Liste de tout les patients
                        </h6>
                        {{-- <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#modalPatient">Nouveau Patient</a> --}}
                    </div>
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                            </thead>
                            <tbody>
                                <div class="">
                                    <!-- Start Card Box--> 
                                <div class="container">
                                    <div class="row">
                                        @forelse ($personnels as $personnel)
                                                <div class="col-md-6">
                                                    <div class="card">
                                                        <div class="card-body">
                                                            <div class="text-center  img-thumbnail">
                                                                <i class="fa fa-user-md fa-5x " aria-hidden="true"></i>
                                                                {{-- <img src="{{ asset('assets/users/img/patient.png') }}" width="90" class="" alt="profile-image"> --}}
                                                            </div>
    
                                                            <div class="text-left mt-3">
                                                                <p class="text-muted mb-2 font-13"><strong>Nom Complet :</strong> <br>
                                                                    <span class="ml-2">{{ $personnel->name . ' ' . $personnel->firstname }}</span>
                                                                </p>
                                                                <p class="text-muted mb-2 font-13"><strong>Mobile :</strong> <br>
                                                                    <span class="ml-2">{{ $personnel->number ? $personnel->number : 'Numero non entre' }}</span>
                                                                </p>
                                                                <p class="text-muted mb-2 font-13"><strong>Residence :</strong> <br>
                                                                    <span class="ml-2">{{ $personnel->residence ? $personnel->residence : 'Residence Inconnue' }}</span>
                                                                </p>
                                                                <p class="text-muted mb-2 font-13"><strong>Date De Naissance :</strong> <br>
                                                                    <span class="ml-2">{{ $personnel->birthdate }}</span>
                                                                </p>
                                                                <p class="text-muted mb-2 font-13"><strong>Age :</strong> <br>
                                                                    <span class="ml-2">{{ \Carbon\Carbon::parse($personnel->birthdate)->age }} ans</span>
                                                                </p>
                                                                <hr>
                                                                <p class="text-muted mb-2 font-13"><strong>Specialite :</strong> <br>
                                                                    <span class="ml-2 text-uppercase ">{{$personnel->role == 'medecin' ? 'Medecin '. $personnel->specialite : 'Secretaire' }}</span>
                                                                </p>
                                                                <hr>
                                                                <p class="text-muted mb-2 font-13"><strong>Date d'enregistrement :</strong> <br>
                                                                    <span class="ml-2">{{ formatDate($personnel->created_at) }}</span>
                                                                </p>
                                                                <hr>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                        @empty
                                        <!-- End card-box -->
                                </div>
                                </div>
                                
                                <tr>
                                    
                                    <td>34 ans</td>
                                    <td>Son nom complet</td>
                                    <td>{{__('Aucun Email')}}</td>
                                    <td>
                                        {{__('Aucune residence')}}
                                    </td>
                                    <td class="float-center">
                                        <a href="" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.footer')
            </div>
            <!-- Footer End -->
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    
    @push('title_header')
        <title>Liste du Personnel de la Clinque | {{config('app.name')}}</title>
    @endpush
    </x-specialiste>