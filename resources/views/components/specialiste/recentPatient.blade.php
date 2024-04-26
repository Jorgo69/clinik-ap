<div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12 mb-2">

    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">
            Toutes les Patients
        </h6>
        <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Nouveau Patient</a>
    </div>


        <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modalDetailPatient" aria-hidden="true">
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


    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-dark">
                    <th scope="col">Patient</th>
                    <th scope="col">Age</th>
                    <th scope="col">Allergie</th>
                    <th scope="col">Groupe Sanguin</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Son nom</td>
                    <td>24 ans</td>
                    <td>Maux de tete</td>
                    <td>O +</td>
                    <td class="float-center">
                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Voir</a>
                    </td>
                </tr>
                <tr>
                    <td>Son nom</td>
                    <td>24 ans</td>
                    <td>Maux de tete</td>
                    <td>O +</td>
                    <td class="float-center">
                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Voir</a>
                    </td>
                </tr>
                <tr>
                    <td>Son nom</td>
                    <td>24 ans</td>
                    <td>Maux de tete</td>
                    <td>O +</td>
                    <td class="float-center">
                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Voir</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>