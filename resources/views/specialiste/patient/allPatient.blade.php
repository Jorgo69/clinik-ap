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
                                <tr class="text-dark">
                                    <th scope="col">Age</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Adresse Mail</th>
                                    <th scope="col">Residence</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($patients as $patient)
                                @php
                                    $birthday = date($patient->birthdate);
                                    $birthday = intval($birthday);
                                    $years = date('Y-m-d');
                                    $years = intval($years) ;
                                    $years = $years - $birthday;
                                @endphp
                                <tr>
                                    <td>{!!$years .' ans' !!}</td>
                                    <td>{{$patient->name}} {{$patient->firstname}} </td>
                                    <td>{{$patient->email}}</td>
                                    <td>
                                        {{$patient->residence ? $patient->residence : 'Residence inconnue'}}
                                    </td>
                                    <td class="d-flex col-lg justify-content-between">
                                        <a href="{{ route('specialiste.details.patients', ['id' => $patient->id])}}" class=""><i class="fa fa-eye" aria-hidden="true"></i></a>
                                        <a href="{{ route('specialiste.patient.find', ['id' => $patient->id])}}" class=" text-success"><i class="bi bi-brush"></i></a>
                                        <a onclick="confirmDeletion('{{ route('specialiste.patient.found', ['id' => $patient->id]) }}')" class="text-danger">
                                            <i class="bi bi-trash"></i>
                                        </a>
                                        
                                    </td>
                                </tr>
                                <script>
                                    function confirmDeletion(url) {
                                        if (confirm('Êtes-vous sûr de vouloir supprimer ce patient ?')) {
                                            window.location.href = url;
                                        }
                                    }
                                </script>
                                
                                @empty
                                
                                

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
        <title>Liste des patients | {{config('app.name')}}</title>
    @endpush
    </x-specialiste>