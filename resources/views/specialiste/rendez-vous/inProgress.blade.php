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
    
            <!-- Les Rendez vous Start -->
            <div class="container-fluid pt-4 px-4">
                
                <div class="bg-light text-center rounded mb-3 p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"> Les rendez vous Assigne</h6>
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-info">
                        {{ Session::get('success') }}
                        <a href=""><span class="float-end">X</span></a>
                    </div>
                    @endif
                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Date soumise</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Motif</th>
                                    <th scope="col">Medecin Assigner</th>
                                    <th scope="col">Sexe</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($appointments as $appointment)
                                <tr>
                                    <th scope="row">{{$appointment->date}}</th>
                                    <td>{{$appointment->patient->name. ' ' .$appointment->patient->firstname}}</td>
                                    <td>{{$appointment->motif}}</td>
                                    <td>{{$appointment->medecin->name}}</td>
                                    <td>{{$appointment->patient->sexe === 'masculin' ? 'Homme' : 'Femme' }}</td>
                                    <td><a type="btn" class="btn btn-primary" href="{{ route('specialiste.secretaire.modif.rdv', ['id' => $appointment->id])}}">Modifier</a></td>
                                </tr>
                                @empty
                                <tr>
                                    <th scope="row">24/12/2002 08:30</th>
                                    <td>Son Nom au complet</td>
                                    <td>Diarhee</td>
                                    <td>Homme</td>
                                    <td>24 ans</td>
                                </tr>
                                @endforelse
                                
                            </tbody>
                        </table>
                    </div>
                </div>                  
                
            </div>
            <!-- Recent Sales End -->
    
    
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.footer')
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @push('title_header')
        <title>Mes RDV | {{ config('app.name') }}</title>
    @endpush
</x-specialiste>