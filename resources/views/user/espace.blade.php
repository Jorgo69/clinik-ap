<x-user>
{{-- Top Bar Start --}}
@include('components.topBar')
{{-- Top Bar End --}}

{{-- Nav Bar Start --}}
@include('components.navBar')
{{-- Nav Bar End --}}

{{-- <div class="container">
    <div class="card text-center">
        <div class="card-header">
          <ul class="nav nav-tabs card-header-tabs">
            <li class="nav-item">
              <a class="nav-link active" href="#">Active</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
          </ul>
        </div>
        <div class="card-body">
          <h5 class="card-title">Special title treatment</h5>
          <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
          <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
      </div>
</div> --}}


<div class="container">
    {{-- <div class="bg-light rounded p-4"> --}}
        <h6 class="mb-4"> Ma Fiche Medical </h6>
        <div class="d-flex align-items-start">
            {{-- Les boutons --}}
            <div class="nav flex-column nav-pills me-3 col-md-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false"> Consultations</button>
                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Traitements</button>
                <button class="nav-link " id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="true">Carnets</button>
                <button class="nav-link active" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Profil</button>
            </div>

            <div class="tab-content col-md-9" id="v-pills-tabContent">
                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                    <h6>Consultation</h6>
                    <div class="table-responsive">
                      <table
                        class="table table-primary">
                        <thead>
                          <tr>
                            <th scope="col">Date consultation</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Taille en Cm</th>
                            <th scope="col">Poid en kg</th>
                            <th scope="col">Poule </th>
                            <th scope="col">Observation</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td scope="row">28/09/1995</td>
                            <td>
                              Lorem ipsum, dolor sit amet consectetur adipisicing elit. Earum, quod!
                            </td>
                            <td>168</td>
                            <td>79</td>
                            <td>88</td>
                            <td>
                              Dysphagie douloureuse depuis 48 h.
                              Fièvre 38°5
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    
                </div>
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    <h6>Traitement</h6>
                    <div class="table-responsive">
                      <table
                        class="table table-primary">
                        <thead>
                          <tr>
                            <th scope="col">Consultation Id</th>
                            <th scope="col">Date proposition</th>
                            <th scope="col">Motif</th>
                            <th scope="col">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="">
                            <td scope="row">Consult_12+24</td>
                            <td scope="row">28/09/1995</td>
                            <td>
                              Doliprane 3 fois par jour | 1 Matin 1 Midi 1 Soir
                            </td>
                            <td>
                              <button class="btn btn-primary">Voir</button>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                </div>
                <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <h6 class="fw-bold m-0">Carnets</h6>
                </div>
                <div class="tab-pane fade active show" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                  <div class="container">
                    <div class="col-auto">
                      <h6>Fiche Administrative</h6>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th scope="row">Nom</th>
                            <td>Ducobu</td>
                          </tr>
                          <tr>
                            <th scope="row">Prenom</th>
                            <td>Jean</td>
                          </tr>
                          <tr>
                            <th scope="row">Date de naissance</th>
                            <td>01 Janvier 2000</td>
                          </tr>
                          <tr>
                            <th scope="row">Lieu de naissance</th>
                            <td>Cotonou</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>example@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">Adresse</th>
                            <td>Bidossessi</td>
                          </tr>
                          <tr>
                            <th scope="row">Situation familial</th>
                            <td>Marie avec enfants</td>
                          </tr>
                          <tr>
                            <th scope="row">Sexe</th>
                            <td>Homme</td>
                          </tr>
                          <tr>
                            <th scope="row">Antecedent Familial</th>
                            <td>Ducobu</td>
                          </tr>
                          <tr>
                            <th scope="row">Prenom</th>
                            <td>Jean</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                    <div class="col-auto">
                      <h6>Antecedent Familial</h6>
                      <table class="table">
                        <tbody>
                          <tr>
                            <th scope="row">Antecedent medici</th>
                            <td>Hypertension artérielle (1975)
                              Hypercholestérolémie (1983)
                              Diabète de type 2
                            </td>
                          </tr>
                          <tr>
                            <th scope="row">Antecedent chururgicaux</th>
                            <td>Jean</td>
                          </tr>
                          <tr>
                            <th scope="row">Date de naissance</th>
                            <td>01 Janvier 2000</td>
                          </tr>
                          <tr>
                            <th scope="row">Lieu de naissance</th>
                            <td>Cotonou</td>
                          </tr>
                          <tr>
                            <th scope="row">Email</th>
                            <td>example@gmail.com</td>
                          </tr>
                          <tr>
                            <th scope="row">Adresse</th>
                            <td>Bidossessi</td>
                          </tr>
                          <tr>
                            <th scope="row">Situation familial</th>
                            <td>Marie avec enfants</td>
                          </tr>
                          <tr>
                            <th scope="row">Sexe</th>
                            <td>Homme</td>
                          </tr>
                          <tr>
                            <th scope="row">Antecedent Familial</th>
                            <td>Ducobu</td>
                          </tr>
                          <tr>
                            <th scope="row">Prenom</th>
                            <td>Jean</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    {{-- </div> --}}
</div>


{{-- Footer --}}
@include('components.footer')
{{-- Footer End --}}
</x-user>