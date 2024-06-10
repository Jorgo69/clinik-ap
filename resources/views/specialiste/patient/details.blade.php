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

                        <div class="row">
                            <!-- Start col-->
                            <div class="col-lg-4 col-xl-4">
                                <!-- Start Card Box--> 
                                <div class="card-box text-center">
                                    <img src="{{asset('assets/users/img/patient.png')}}" width="90" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                    
                                    <div class="text-left mt-3">
                                        <p class="text-muted mb-2 font-13"><strong>Nom Complet :</strong> <span class="ml-2">{{$patient->name}} {{$patient->firstname}} </span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Mobile :</strong><span class="ml-2"> 692 382 65</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Residence :</strong> <span class="ml-2">{{$patient->residence ? $patient->residence : 'Residence non connue' }}</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Date De Naissance :</strong> <span class="ml-2">{{$patient->birthdate}}</span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Age :</strong> <span class="ml-2"> {{ $years }} ans </span></p>
                                        <p class="text-muted mb-2 font-13"><strong>Allergie :</strong> <span class="ml-2"> Poisson </span></p>
                                        <hr>
                                        <p class="text-muted mb-2 font-13"><strong>Date d'enreigistrement :</strong> <span class="ml-2">
                                            {{-- {{ date('Y-m-d', strtotime($patient->created_at)). ' a '. date('i', strtotime($patient->created_at))  }}  --}}
                                            {{-- {{date('l, F j, Y', strtotime($patient->created_at))}} --}}
                                            {{-- {{date('l, F j, Y H:i:s', strtotime($patient->created_at))}} --}}
                                            {{formatDate($patient->created_at)}}
                                        </span></p>
                                        <hr>
                                    </div>
                                </div>
                                <!-- End card-box -->
                            </div> 
                            <!-- End col-->
                            <div class="col-lg-8 col-xl-8">
                                <div class="card-box">
                                <div class="bg-light rounded h-100 p-4">
                                    <ul class="nav nav-pills navtab-bg nav-justified mb-3 " id="pills-tab" role="tablist">
                                        {{-- <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                                aria-selected="true">
                                                <i class="fa fa-file" aria-hidden="true"></i>
                                            </button>
                                        </li> --}}
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-profile" type="button" role="tab"
                                                aria-controls="pills-profile" aria-selected="false">
                                                <i class="fa fa-signal" aria-hidden="true"></i>
                                            </button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="pills-contact-tab" data-bs-toggle="pill"
                                                data-bs-target="#pills-contact" type="button" role="tab"
                                                aria-controls="pills-contact" aria-selected="false">
                                                <i class="fa fa-folder" aria-hidden="true"></i>
                                            </button>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        {{-- <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                                            Sit sanctus et stet dolor kasd kasd takimata. Dolor stet dolores nonumy et dolor et eos lorem et, diam ipsum nonumy elitr sanctus dolores voluptua sit dolor, at et et amet nonumy elitr ea et ipsum. Elitr lorem et dolore invidunt eirmod voluptua lorem sed. Sed eirmod sadipscing eos tempor.
                                        </div> --}}
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                            <div class="table-responsive">
                                                <table class="table table-borderless mb-0">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th>Temperature du Corps</th>
                                                            <th>Fréquence cardiaque/pouls</th>
                                                            <th>Fréquence respiratoire</th>
                                                            <th>Pression artérielle</th>
                                                            <th>Date d'enreigistrement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>38°C</td>
                                                            <td>77BPM</td>
                                                            <td>12bpm</td>
                                                            <td>90/60mmHg</td>
                                                            <td>2022-10-18</td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                            @forelse ($dossiers as $index => $detailsConsutations)
                                            <div class="accordion" id="accordionExample{{ $index }}">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="heading{{ $index }}">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                                            aria-controls="collapse{{ $index }}">
                                                            {{ $detailsConsutations->pattern }}
                                                        </button>
                                                    </h2>
                                                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                                        aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample{{ $index }}">
                                                        <div class="accordion-body">
                                                            
                                                            <ul class="list-unstyled timeline-sm">
                                                                <li class="timeline-sm-item">
                                                                    <h5 class="mt-0 mb-1">Motif de la consultation</h5>
                                                                    <p>{{ $detailsConsutations->pattern }}</p>
                                                                    <hr>
                                                                    <!-- Diagnostic -->
                                                                    <h5>Diagnostic</h5>
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>{!! $detailsConsutations->diagnostic !!}</p>
                                                                    <hr>
                                                                    <!-- Observation -->
                                                                    <h5>Observation</h5>
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>{!! $detailsConsutations->observation !!}</p>
                                                                    <hr>
                                                                    <!-- Prescription -->
                                                                    <h5>Prescription</h5>
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>{{ __('Prescription') }}</p>
                                                                    <hr>
                                                                    <!-- Signature -->
                                                                    {{-- <div class="text-end mb-5">
                                                                        <h5>Signature</h5>
                                                                        <p class="text-muted mt-2"></p>
                                                                        <p>{{ $detailsConsutations->medecins->name . ' ' . $detailsConsutations->medecins->firstname }}</p>
                                                                        <p class="text-uppercase text-info font-weight-bold">{{ $detailsConsutations->medecins->specialite }}</p>
                                                                        <p>
                                                                            <a href="{{ $detailsConsutations->id}}" class="btn btn-info">Modifier le Carnet</a>
                                                                        </p>
                                                                        <p>
                                                                            <a href="{{$detailsConsutations->id}}" class="btn btn-primary">Envoyer le Carnet</a>
                                                                        </p>
                                                                    </div> --}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                            </div>
                                            @empty
                                            <p>Aucune consultation trouvée.</p>
                                            @endforelse
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>

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
            <title>Liste des patients | {{config('app.name')}}</title>
        @endpush
</x-specialiste>