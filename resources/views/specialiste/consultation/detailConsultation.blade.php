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
                <div class="bg-light rounded mx-5 p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">

                    <div class="row">
                        <!-- Start col-->
                        <div class="col-lg-3 col-xl-3">
                            <!-- Start Card Box--> 
                            <div class="card-box text-center">
                                <img src="{{asset('assets/users/img/patient.png')}}" width="90" class="rounded-circle avatar-lg img-thumbnail" alt="profile-image">
                                
                                <div class="text-left mt-3">
                                    <p class="text-muted mb-2  font-13"><strong class="text-decoration-underline">Nom Complet :</strong> <br>
                                         <span class="ml-2"> {{$detailsConsutations->patients->name. ' ' .$detailsConsutations->patients->firstname}} </span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Mobile :</strong> <br>
                                        <span class="ml-2"> {{$detailsConsutations->patients->number}}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Residence :</strong> <br>
                                        <span class="ml-2">{{ $detailsConsutations->patients->residence ? $detailsConsutations->patients->residence : 'Residence Inconnue' }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Date De Naissance :</strong> <br> 
                                        <span class="ml-2">{{ $detailsConsutations->patients->birthdate }}</span>
                                    </p>
                                    <p class="text-muted mb-2 font-13"><strong>Age :</strong> <br>
                                         <span class="ml-2">  </span>
                                    </p>
                                    <hr>
                                    <p class="text-muted mb-2 font-13"><strong>Allergie :</strong> <br>
                                         <span class="ml-2"> Poisson </span>
                                    </p>
                                    <hr>
                                    <p class="text-muted mb-2 font-13"><strong>Date d'enreigistrement :</strong> <br>
                                         <span class="ml-2">
                                        {{formatDate($detailsConsutations->patients->created_at)}}
                                        {{-- {{ date('Y-m-d', strtotime($patient->created_at)). ' a '. date('i', strtotime($patient->created_at))  }}  --}}
                                        {{-- {{date('l, F j, Y', strtotime($patient->created_at))}} --}}
                                        {{-- {{date('l, F j, Y H:i:s', strtotime($patient->created_at))}} --}}
                                    
                                    </span></p>
                                    <hr>
                                </div>
                            </div>
                            <!-- End card-box -->
                        </div> 
                        <!-- End col-->
                        <div class="col-lg-9 col-xl-9">
                            <div class="card-box">
                            <div class="bg-light rounded h-100 p-4">
                                <ul class="nav nav-pills navtab-bg nav-justified mb-3 " id="pills-tab" role="tablist">
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
                                            <i class="fa fa-folder-open" aria-hidden="true"></i>
                                        </button>
                                    </li>
                                </ul>
                                <div class="tab-content" id="pills-tabContent">
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
                                                        <td> {{$detailsConsutations->temperature }} °C</td>
                                                        <td> {{$detailsConsutations->poulse}} BPM</td>
                                                        <td> {{$detailsConsutations->stetoscopy}} bpm</td>
                                                        <td>90/60mmHg</td>
                                                        <td>{{formatDate($detailsConsutations->created_at). ' ' .$detailsConsutations->created_at->format('Y')}}</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade show active" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                        {{-- <div class="bg-light rounded h-100 p-4"> --}}
                                            {{-- <h6 class="mb-4">Basic Accordion</h6> --}}
                                            <div class="accordion" id="accordionExample">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingOne">
                                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne" aria-expanded="true"
                                                            aria-controls="collapseOne">
                                                            {{$detailsConsutations->pattern}}
                                                        </button>
                                                    </h2>
                                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            
                                                            <ul class="list-unstyled timeline-sm">
                                                                <li class="timeline-sm-item">
                                                                    <span class="timeline-sm-date">{{formatDate($detailsConsutations->created_at). ' ' .$detailsConsutations->created_at->format('Y')}}</span>
                                                                    {{-- <h3 class="mt-0 mb-1">{{$detailsConsutations->pattern}}</h3> --}}
                                                                    <hr>
                                                                    <!-- Diagnostic -->
                                                                    <h5>
                                                                        Diagnostic
                                                                    </h5>
                                                                    
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>
                                                                        {!! $detailsConsutations->diagnostic !!}
                                                                    </p>
                                                                    <hr>
                                                                    <!-- Observation -->
                                                                    <h5>
                                                                        Observation
                                                                    </h5>
                                                                    
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>
                                                                        {!! $detailsConsutations->observation !!}
                                                                    </p>
                                                                    <hr>
                    
                                                                    <!-- Prescription -->
                                                                    <h5>
                                                                        Prescription
                                                                    </h5>
                                                                    
                                                                    <p class="text-muted mt-2"></p>
                                                                    <p>
                                                                        {{__('Prescription')}}
                                                                    </p>
                                                                    <hr>
                    
                                                                    <!-- Signature -->
                                                                    {{-- <p> --}}
                                                                        <div class="text-end mb-5">
                                                                            <h5>
                                                                                Signature
                                                                            </h5>
                                                                            
                                                                            <p class="text-muted mt-2"></p>
                                                                            <p>
                                                                                {{$detailsConsutations->medecins->name. ' ' .$detailsConsutations->medecins->firstname}}
                                                                            </p>
                                                                            <p class="text-uppercase text-info font-weight-bold">
                                                                                    {{$detailsConsutations->medecins->specialite}}
                                                                            </p>
                                                                        </div>
                                                                    {{-- </p> --}}
                    
                                                                </li>
                                                            </ul>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingTwo">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                            aria-expanded="false" aria-controls="collapseTwo">
                                                            Accordion Item #2
                                                        </button>
                                                    </h2>
                                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            Voluptua sit dolores consetetur ea et diam est et takimata. Et erat sadipscing dolores et stet diam ut ut diam, sit aliquyam no magna et dolore lorem dolor sit. Lorem lorem sed sed duo, eirmod sit diam ipsum sit erat, lorem sit dolor diam amet ea aliquyam tempor rebum invidunt,.
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header" id="headingThree">
                                                        <button class="accordion-button collapsed" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                            aria-expanded="false" aria-controls="collapseThree">
                                                            Accordion Item #3
                                                        </button>
                                                    </h2>
                                                    <div id="collapseThree" class="accordion-collapse collapse"
                                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                        <div class="accordion-body">
                                                            Dolore eos dolor tempor justo sea eos amet eos kasd dolor, et diam tempor lorem dolores vero. Stet dolore gubergren nonumy diam. Consetetur sit takimata magna invidunt, dolore sea amet consetetur ea et rebum, invidunt et amet sit sea. Dolor eirmod sed magna sadipscing sadipscing lorem lorem sed, sit lorem.
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        {{-- </div> --}}
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