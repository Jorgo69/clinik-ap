<x-specialiste>
<!-- Modal -->
<div class="modal fade" id="modalPatient" tabindex="-1" aria-labelledby="modalDetailPatient" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    {{-- <div class="modal-dialog modal-fullscreen"> --}}
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modalDetailPatient">Ajouter un nouveau patient</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body d-flex justify-space-evently">
            <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                <div class="col-sm-auto col-xl-auto">
                    <form action="{{ route('Add.Patient')}}" method="post">
                        @csrf
                    <div class="bg-light rounded h-100 mb-3 p-4">
                        <h5>Informations de base</h5>
                        <div class="mb-3">
                            <label for="helpNomId" class="form-label">Nom de Famille</label>
                            <input type="text" class="form-control" name="name" id="" aria-describedby="helpNomId" placeholder="" />
                            
                            @error('name')
                            <small id="helpNomId" class="form-text text-danger">{{$message}}</small>
                            @else
                            <small id="helpNomId" class="form-text text-muted">Tous les nom du patient</small> <br>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="helpPrenomId" class="form-label">Prenom du Patient</label>
                            <input type="text" class="form-control" name="firstname" id="" aria-describedby="helpPrenomId" placeholder="" />
                            
                            @error('firstname')
                            <small id="helpNomId" class="form-text text-danger">{{$message}}</small>
                            @else
                            <small id="helpPrenomId" class="form-text text-muted">Tous les prenom au complet</small> <br>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <div class="form-check">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadioHomme" value="masculin" @checked(true)>
                                    <label class="form-check-label" for="inlineRadioHomme">Homme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="sexe" id="inlineRadioFemme" value="feminin">
                                    <label class="form-check-label" for="inlineRadioFemme">Femme</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <label class="form-check-label"> Sexe</label>
                                </div>
                            </div>
                            @error('sexe')
                            <small class="text-danger">{{$message}}</small>
                            @else
                            <small class="from-text text-muted">Choisissez le sexe</small>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="helpResidenceId" class="form-label">Residence du Patient</label>
                            <input type="text" class="form-control" name="residence" id="helpResidenceId" aria-describedby="helpResidenceId" placeholder="" />
                            
                            @error('residence')
                            <small id="helpNomId" class="form-text text-danger">{{$message}}</small>
                            @else
                            <small id="helpResidenceId" class="form-text text-muted">L'adresse residentielle du patient</small> <br>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="helpAdresseId" class="form-label">Email du Patient</label>
                            <input type="text" class="form-control" name="email" id="" aria-describedby="helpAdresseId" placeholder="" />
                            
                            @error('email')
                            <small id="helpNomId" class="form-text text-danger">{{$message}}</small>
                            @else
                            <small id="helpAdresseId" class="form-text text-muted">Adresse Email du patient</small> <br>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="helpDateId" class="form-label">Date de naissance</label>
                            <input type="date" class="form-control" name="birthdate" id="" aria-describedby="helpDateId" placeholder="" />
                            
                            @error('birthdate')
                            <small id="helpNomId" class="form-text text-danger">{{$message}}</small>
                            @else
                            <small id="helpDateId" class="form-text text-muted">La date de naissance du patient</small> <br>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-primary">Ajouter</button>
        </div>
    </form>
    </div>
    </div>
    {{-- </div> --}}
</div>

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
            <div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">
                @if (Session::has('success'))
                <div class="alert alert-info text-center">
                    {{Session::get('success') }}
                    <a href="" class="float-end"> X</a>
                </div>
                @endif
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">
                        Liste des Patients à consulter
                    </h6>
                    <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#modalPatient">Nouveau Patient</a>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                
                                <th scope="col">Age</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Groupe Sanguin</th>
                                <th scope="col">Motif</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($patients as $patient )
                            @php
                                $birthday = date($patient->birthdate);
                                $birthday = intval($birthday);
                                $years = date('Y-m-d');
                                $years = intval($years) ;
                                $years = $years - $birthday;
                            @endphp
                            <tr>                                
                                <td>{!!$years .' ans' !!}</td>
                                <td>{{$patient->name}} {{$patient->firstname}}</td>
                                <td>O +</td>
                                <td>Corps Chaud</td>
                                <td class="text-center">
                                    <a href="{{route('specialiste.detail.consultation', ['id' => $patient->id])}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <a href="?=1">
                                        <input class="form-check-input"  type="checkbox">
                                    </a>
                                </td>
                                <td>45</td>
                                <td>Son nom complet</td>
                                <td>O +</td>
                                <td>Corps Chaud</td>
                                <td class="text-center">
                                    <a href="{{route('specialiste.detail.consultation')}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
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
    <title>Liste des consultation | {{config('app.name')}}</title>
@endpush
</x-specialiste>