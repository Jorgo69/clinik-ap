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
                                    <p class="text-muted mb-2 font-13"><strong>Date d'enreigistrement :</strong> <span class="ml-2">{{Carbon\Carbon::parse($patient->created_at, 'Y-m-d')}}</span></p>
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
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                        aria-selected="true">
                        <i class="fa fa-file" aria-hidden="true"></i>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-profile" type="button" role="tab"
                        aria-controls="pills-profile" aria-selected="false">
                        <i class="fa fa-signal" aria-hidden="true"></i>
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                        data-bs-target="#pills-contact" type="button" role="tab"
                        aria-controls="pills-contact" aria-selected="false">
                        <i class="fa fa-folder" aria-hidden="true"></i>
                    </button>
                </li>
            </ul>
            <!-- Success Message -->
            @if (Session::has('success'))
            <div class="alert alert-info text-center">
                {{Session::get('success') }}
                <a href="" class="float-end"> X</a>
            </div>                                
            @endif
            <form action="{{route('specialiste.consulte.patient')}}" method="post">
                @csrf
                <input type="hidden" name="patient_id" value="{{$patient->id}}">
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                        {{-- @livewire('specialiste.consultation.constant-vital-component', ['patient' => $patient], key($patient->id)) --}}
                        <div class="col-md-12 mb-3">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title text-capitalize">
                                    Motif de la consultation
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <input type="text" name="pattern" class="form-control" placeholder="Le motif de la consultation">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 mb-3">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title text-capitalize">
                                    constante vital
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <input type="text" name="temperature" class="form-control mb-2" placeholder="La temperature">
                                    <input type="text" name="poul" class="form-control mb-2" placeholder="Le poul">
                                    <input type="text" name="poid" class="form-control mb-2" placeholder="Le poid">
                                    <input type="text" name="stetoscopie" class="form-control mb-2" placeholder="stetoscopy">
                                    <input type="text" name="taille" class="form-control mb-2" placeholder="la taille">
                                </div>
                            </div>
                        </div>



                        <div class="col-md-12 mb-3">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title text-capitalize">
                                    Diagnostic
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea name="diagnostic" id="diagnostic" cols="30" rows="10"></textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Bloc des observations --}}
                        <div class="col-md-12 mb-3">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title text-capitalize">
                                    Observation
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea name="observation" id="observation" cols="30" rows="10">
                                        
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Bloc prescription --}}
                        <div class="col-md-12 mb-3">
                            <div class="card card-outline card-info">
                                <div class="card-header">
                                <h3 class="card-title text-capitalize">
                                    Prescription
                                </h3>
                                </div>
                                <!-- /.card-header -->
                                <div class="card-body">
                                    <textarea name="prescription" id="prescription" cols="30" rows="10">
                                        <h4 style="text-align: center; "><u>Prescription</u></h4><table class="table table-bordered"><tbody><tr><td>Medocs</td><td>Rythme</td></tr><tr><td>Para</td><td>3 par jours</td></tr><tr><td><br></td><td><br></td></tr></tbody></table><p><br></p>
                                    </textarea>
                                </div>
                            </div>
                        </div>

                        {{-- Start Summernote   without Boostrap Only cdn - css and js files--}}
                        <script>
                            $('#diagnostic').summernote({
                            placeholder: 'Entrer le diagnostic retenu à travers les informations relevé sur le patient',
                            tabsize: 2,
                            height: 50,
                            // height: 120,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture']],
                                ['fontname', ['fontname']]
                                // ['insert', ['link', 'picture', 'video']],
                                // ['view', ['fullscreen', 'codeview', 'help']]
                            ]
                            });
                            
                        </script>
                        <!-- Observation -->
                        <script>
                            $('#observation').summernote({
                            placeholder: 'Entrer les informations concernant le patient ici',
                            tabsize: 2,
                            height: 300,
                            // height: 120,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture']],
                                ['fontname', ['fontname']]
                            ]
                            });

                            $('#prescription').summernote({
                            placeholder: 'Entrer les informations concernant le patient ici',
                            tabsize: 2,
                            height: 300,
                            // height: 120,
                            toolbar: [
                                ['style', ['style']],
                                ['font', ['bold', 'underline', 'clear']],
                                ['color', ['color']],
                                ['para', ['ul', 'ol', 'paragraph']],
                                ['table', ['table']],
                                ['insert', ['link', 'picture']],
                                ['fontname', ['fontname']]
                            ]
                            });
                            
                        </script>
                        {{-- End Summernote without Boostrap Only cdn - css and js files --}}
                        <button class="btn btn-info">Relever</button>
                    </form>
                    </div>
                    {{-- <button class="btn btn-info">Relever</button>
                    </form> --}}
                    <script>
                         @if (session('redirect'))
                        document.addEventListener('DOMContentLoaded', function() {
                            window.location.href = '{{ route('specialiste.index') }}';
                        });
                    @endif
                    </script>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="col-md-12 mb-3">
                            <form action="{{ route('specialiste.more.information.patient')}}" method="post">
                                @csrf
                                @method('POST')
                                <div class="card card-outline card-info">
                                    <div class="card-header">
                                    <h3 class="card-title text-capitalize">
                                        Information Crucial
                                    </h3>
                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <label for="exampleDataList" class="form-label">Entrer le Groupe Sanguin du Patient</label>
                                        <input type="hidden" name="patient_id" value="{{$patient->id}}">
                                        <input class="form-control mb-3" name="groupe_sanguin" list="datalistOptions" id="exampleDataList" placeholder="Groupe Sanguin...">
                                        <datalist id="datalistOptions">
                                            <option value="A+">
                                            <option value="A-">
                                            <option value="B+">
                                            <option value="B-">
                                            <option value="AB+">
                                            <option value="AB-">
                                            <option value="O+">
                                            <option value="O-">
                                        </datalist>
                                        <input type="text" name="allergies" class="form-control mb-2" placeholder="Allergien">
                                        <label for="" class="text-bold">Information Supplementaire</label>
                                        <textarea name="autres_informations" id="other_medical_information" cols="30" rows="10"></textarea>
                                    </div>
                                    <!-- Autre Information Medical -->
                                        <script>
                                            $('#other_medical_information').summernote({
                                            placeholder: 'Entrer les informations supplementaire pouvant aider a la tracabilite de son historique maladie',
                                            tabsize: 2,
                                            height: 300,
                                            // height: 120,
                                            toolbar: [
                                                ['style', ['style']],
                                                ['font', ['bold', 'underline', 'clear']],
                                                ['color', ['color']],
                                                ['para', ['ul', 'ol', 'paragraph']],
                                                ['table', ['table']],
                                                ['insert', ['link', 'picture']],
                                                ['fontname', ['fontname']]
                                            ]
                                            });
                                            
                                        </script>
                                </div>
                                <button class="btn btn-info">Relever</button>
                            </form>
                        </div> 
                            {{-- <table class="table">
                                <tbody>
                                <tr>
                                    <th scope="row">Groupe Sanguin</th>
                                    <td>{{__('O +')}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Facteur Rhesus</th>
                                    <td>{{__('AB -')}}</td>
                                </tr>
                                <tr>
                                    <th scope="row">Allergie</th>
                                    <td> {{__('Poisson')}} </td>
                                </tr>
                                <tr>
                                    <th scope="row">Observation</th>
                                    <td>{{__('')}}</td>
                                </tr>
                                </tbody>
                            </table> --}}
                    </div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                        @forelse ($consultations as $index => $consultation)
                        <div class="accordion mb-1" id="accordionExample{{ $index }}">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading{{ $index }}">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index == 0 ? 'true' : 'false' }}"
                                        aria-controls="collapse{{ $index }}">
                                        {{ $consultation->pattern }}
                                    </button>
                                </h2>
                                <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}"
                                    aria-labelledby="heading{{ $index }}" data-bs-parent="#accordionExample{{ $index }}">
                                    <div class="accordion-body">
                                        <ul class="list-unstyled timeline-sm">
                                            <li class="timeline-sm-item">
                                                <h3 class="mt-0 mb-1">{{ $consultation->pattern }}</h3>
                                                <hr>
                                                <!-- Diagnostic -->
                                                <h5>Diagnostic</h5>
                                                <p class="text-muted mt-2"></p>
                                                <p>{!! $consultation->diagnostic !!}</p>
                                                <hr>
                                                <!-- Observation -->
                                                <h5>Observation</h5>
                                                <p class="text-muted mt-2"></p>
                                                <p>{!! $consultation->observation !!}</p>
                                                <hr>
                                                <!-- Prescription -->
                                                <h5>Prescription</h5>
                                                <p class="text-muted mt-2"></p>
                                                <p>{{ __('Prescription') }}</p>
                                                <hr>
                                                <!-- Signature -->
                                                <div class="text-end mb-5">
                                                    <h5>Signature</h5>
                                                    <p class="text-muted mt-2"></p>
                                                    <p>{{ $consultation->medecins->name . ' ' . $consultation->medecins->firstname }}</p>
                                                    <p class="text-uppercase text-info font-weight-bold">{{ $consultation->medecins->specialite }}</p>
                                                    <p>
                                                        <a href="{{ $consultation->id}}" class="btn btn-info">Modifier le Carnet</a>
                                                    </p>
                                                    <p>
                                                        <a href="{{$consultation->id}}" class="btn btn-primary">Envoyer le Carnet</a>
                                                    </p>
                                                </div>
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
                {{-- <button class="btn btn-info">Relever</button>
            </form> --}}
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
        <title>Liste des Carnets du patients | {{config('app.name')}}</title>
    @endpush
</x-specialiste>