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
            @forelse ($appointments as $appointment)
            <div class="container-fluid pt-4 px-4">
                <div class="card" >
                    <div class="card-header" style="text-transform: capitalize">
                      {{$appointment->type_specialite}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$appointment->patient->name. ' '. $appointment->patient->firstname}}</li>
                      <li class="list-group-item">Categorie Concerner</li>
                      {{-- <li class="list-group-item">{{ date('m'. ' '. 'd', strtotime($appointment->date)). ' a '. $appointment->hours }}</li> --}}
                      <li class="list-group-item">{{ strftime('%B %d, %Y', strtotime($appointment->date)). ' a '. $appointment->hours }}</li>
                      <li class="list-group-item">{{$appointment->motif}}</li>
                      <li class="list-group-item">
                        @foreach ($medecins_disponibles as $disponibles )
                            {{$disponibles->name}}
                        @endforeach
                        
                      </li>
                    </ul>
                  </div>
                
            </div>
            @empty
            <div class="container-fluid pt-4 px-4">
                <div class="card" >
                    <div class="card-header">
                      Cardiolgue
                    </div>
                    <ul class="list-group list-group-flush">
                      <li class="list-group-item">Patient</li>
                      <li class="list-group-item">Categorie Concerner</li>
                      <li class="list-group-item">Heure Date</li>
                      <li class="list-group-item">Motif</li>
                      <li class="list-group-item">Medecin Dispo</li>
                    </ul>
                  </div>
                
            </div>
            @endforelse
            
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