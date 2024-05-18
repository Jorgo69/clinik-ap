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
                        <div class="bg-light rounded h-100 mb-3 p-4">
                            <div class="mb-3">
                                <label for="helpNomId" class="form-label">Nom de Famille</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpNomId" placeholder="" />
                                <small id="helpNomId" class="form-text text-muted">Tous les nom du patient</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpPrenomId" class="form-label">Prenom du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpPrenomId" placeholder="" />
                                <small id="helpPrenomId" class="form-text text-muted">Tous les prenom au complet</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpResidenceId" class="form-label">Residence du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpResidenceId" placeholder="" />
                                <small id="helpResidenceId" class="form-text text-muted">L'adresse residentielle du patient</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpAdresseId" class="form-label">Email du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpAdresseId" placeholder="" />
                                <small id="helpAdresseId" class="form-text text-muted">Adresse Email du patient</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpPrenomId" class="form-label">Prenom du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpPrenomId" placeholder="" />
                                <small id="helpPrenomId" class="form-text text-muted">Tous les prenom au complet</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpDateId" class="form-label">Date de naissance</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpDateId" placeholder="" />
                                <small id="helpDateId" class="form-text text-muted">La date de naissance du patient</small>
                            </div>
                        </div>
                        <div class="bg-info rounded h-100 p-4">
                            <div class="mb-3">
                                <label for="helpGroupeId" class="form-label">Groupe Sanguin</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpGroupeId" placeholder="" />
                                <small id="helpGroupeId" class="form-text text-muted">Tous les nom du patient</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpTailleId" class="form-label">La Taille du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpTailleId" placeholder="" />
                                <small id="helpTailleId" class="form-text text-muted">La Taille est mesure en Cm</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpPoidseId" class="form-label">Poids du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpPoidseId" placeholder="" />
                                <small id="helpPoidseId" class="form-text text-muted">Le Poid est en Kg</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpPouleId" class="form-label">Poule du Patient</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpPouleId" placeholder="" />
                                <small id="helpPouleId" class="form-text text-muted">L'unite de mesure du Poule est Battement (BPM)</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpPrenomId" class="form-label">Temperature</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpPrenomId" placeholder="" />
                                <small id="helpPrenomId" class="form-text text-muted">La temperature relever sur le patient</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpMauxId" class="form-label">Maux</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpMauxId" placeholder="" />
                                <small id="helpMauxId" class="form-text text-muted">Les maux dont le patient croit souffrir</small>
                            </div>
                            <div class="mb-3">
                                <label for="helpObservationId" class="form-label">Obeservation</label>
                                <input type="text" class="form-control" name="" id="" aria-describedby="helpObservationId" placeholder="" />
                                <small id="helpObservationId" class="form-text text-muted">Les Observations sur le patient </small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                <button type="button" class="btn btn-primary">Ajouter</button>
            </div>
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
                <div class="bg-light rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">
                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                        <div class="col-sm-auto col-xl-auto">
                            @if (Session::has('success'))
                            <div class="alert alert-info text-center">
                                {{Session::get('success') }}
                                <a href="" class="float-end"> X</a>
                            </div>                                
                            @endif
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
                                    <small id="helpPrenomId" class="form-text text-danger">{{$message}}</small>
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
                                    <small id="helpResidenceId" class="form-text text-danger">{{$message}}</small>
                                    @else
                                    <small id="helpResidenceId" class="form-text text-muted">L'adresse residentielle du patient</small> <br>
                                    @enderror
                                </div>
                                <div class="">
                                    <label for="helpNumeroId" class="form-label">Numero du Patient</label>
                                    <input type="text" class="form-control" name="number" id="helpNumeroId" aria-describedby="helpNumeroId" placeholder="" />
                                    
                                    @error('number')
                                    <small id="helpNumeroId" class="form-text text-danger">{{$message}}</small>
                                    @else
                                    <small id="helpResidenceId" class="form-text text-muted">Le numero de Telephone (Whatsapp) patient</small> <br>
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
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                        <input type="submit" value="Ajouter" class="btn btn-primary">
                    </div>
                            </form>
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
        <title>Nouveau Patients | {{config('app.name')}}</title>
    @endpush
    </x-specialiste>