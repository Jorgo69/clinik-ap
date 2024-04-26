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
                            <label for="helpPrenomId" class="form-label">Prenom du Patient</label>
                            <input type="text" class="form-control" name="" id="" aria-describedby="helpPrenomId" placeholder="" />
                            <small id="helpPrenomId" class="form-text text-muted">Tous les prenom au complet</small>
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

<div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">
            Liste de tout les patients
        </h6>
        <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#modalPatient">Nouveau Patient</a>
    </div>
    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-dark">
                    <th scope="col">
                        <a href="?=1">
                            <input class="form-check-input"  type="checkbox">
                        </a>
                    </th>
                    <th scope="col">Naissance</th>
                    <th scope="col">Patient</th>
                    <th scope="col">Groupe Sanguin</th>
                    <th scope="col">Email</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <a href="?=1">
                            <input class="form-check-input"  type="checkbox">
                        </a>
                    </td>
                    <td>01 Jan 2045</td>
                    <td>Son nom complet</td>
                    <td>O +</td>
                    <td>example@gmail.com</td>
                    <td class="float-center">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="?=1">
                            <input class="form-check-input"  type="checkbox">
                        </a>
                    </td>
                    <td>01 Jan 2045</td>
                    <td>Son nom complet</td>
                    <td>O +</td>
                    <td>example@gmail.com</td>
                    <td class="float-center">
                        
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="?=1">
                            <input class="form-check-input"  type="checkbox">
                        </a>
                    </td>
                    <td>01 Jan 2045</td>
                    <td>Son nom complet</td>
                    <td>O +</td>
                    <td>example@gmail.com</td>
                    <td class="float-center">
                        
                    </td>
                </tr>
            </tbody>
        </table>
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