<div class="bg-light text-center rounded p-4">
    <div class="d-flex align-items-center justify-content-between mb-4">
        <h6 class="mb-0">
            {{ request()->routeIs('specialiste.index')  ?
            'Demande de consultations recents' :
            'Toutes les demandes'
        }}
        </h6>
        <a href="">Tout voir</a>
    </div>
    <div class="table-responsive">
        <table class="table text-start align-middle table-bordered table-hover mb-0">
            <thead>
                <tr class="text-dark">
                    <th scope="col"><input class="form-check-input" type="checkbox"></th>
                    <th scope="col">Date</th>
                    <th scope="col">Nom du patient</th>
                    <th scope="col">Maux</th>
                    {{-- <th scope="col">Amount</th> --}}
                    <th scope="col">Status</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                <!-- Button trigger modal -->  
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
    {{-- <div class="modal-dialog modal-fullscreen"> --}}
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Le titre</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
            <div class="modal-body d-flex justify-space-evently">
            <div class="col-md-9">
                
                <div class="col-sm-auto col-xl-auto">
                    <div class="bg-light rounded h-100 p-4">
                        <h6 class="mb-4">Details a propos du clients &amp;</h6>
                        <div class="d-flex align-items-start">
                            <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Recent</button>
                                <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Tous</button>
                                <button class="nav-link active" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages" type="button" role="tab" aria-controls="v-pills-messages" aria-selected="true">Messages</button>
                                <button class="nav-link" id="v-pills-settings-tab" data-bs-toggle="pill" data-bs-target="#v-pills-settings" type="button" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</button>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                    Consetetur at sit est sit ut ipsum clita at. Sit elitr sit sea dolor tempor eos sit, erat diam ea rebum clita no ea. Et amet sed nonumy sadipscing dolor et ut sed et. Stet eirmod est nonumy clita invidunt rebum. Nonumy dolor ut diam invidunt eirmod nonumy sed gubergren,.
                                </div>
                                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                    
                                    <div class="bg-light rounded h-100 p-4">
                                        <h6 class="mb-4">Toutes les demandes du patients</h6>
                                        <div class="accordion accordion-flush" id="accordionFlushExample">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingOne">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                                        Maux numero #1
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" style="">
                                                    <div class="accordion-body">
                                                        Lorem et ea ea consetetur voluptua duo et aliquyam sanctus sit. Et dolore at erat amet et diam labore lorem dolores. Erat amet stet at dolore dolor ea invidunt, justo nonumy justo takimata magna. Stet lorem vero sed eos justo diam dolores, dolor sit takimata et voluptua aliquyam gubergren tempor.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="flush-headingTwo">
                                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                                        Accordion Item #2
                                                    </button>
                                                </h2>
                                                <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                                    <div class="accordion-body">
                                                        Sea diam dolore aliquyam aliquyam diam et consetetur et. Accusam amet no invidunt invidunt et consetetur, magna ut nonumy kasd erat tempor dolor et. Diam magna dolor sed amet duo dolores magna vero. Amet sit sadipscing ea diam clita lorem sit. Vero et et et tempor diam. Ipsum eirmod sit.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="tab-pane fade active show" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                    {{-- Individual Messages --}}
                                        @include('components.messages')
                                    {{-- End Individual Messages --}}
                                    
                                </div>
                                <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                    Sit et vero kasd sea et at, aliquyam takimata et et est, labore et takimata sed ut stet sanctus, nonumy dolor invidunt sit labore et, amet et dolor sit dolor tempor et dolor ipsum nonumy, accusam clita sadipscing ut et labore labore est, dolore accusam vero at est sit. Invidunt.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col-md-3">
                Troisieme Droite
            </div>
            </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>

  
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>01 Jan 2045</td>
                    <td>Son nom</td>
                    <td>Maux de tete</td>
                    <td>Paid</td>
                    <td>
                        <button class="btn btn-sm btn-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</button>
                        <a class="btn btn-sm btn-warning" href="">Accepter</a>
                        <a class="btn btn-sm btn-danger" href="">Refuser</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>01 Jan 2045</td>
                    <td>Son nom</td>
                    <td>Maux de tete</td>
                    <td>Paid</td>
                    <td>
                        <a class="btn btn-sm btn-link" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                        <a class="btn btn-sm btn-warning" href="">Accepter</a>
                        <a class="btn btn-sm btn-danger" href="">Refuser</a>
                    </td>
                </tr>

                
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>01 Jan 2024</td>
                    <td>Son nom</td>
                    <td>Maux de tete</td>
                    <td>Paid</td>
                    <td>
                        <a class="btn btn-sm btn-link" href="">Detail</a>
                        <a class="btn btn-sm btn-warning" href="">Accepter</a>
                        <a class="btn btn-sm btn-danger" href="">Refuser</a>
                    </td>
                </tr>
                
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>01 Jan 2045</td>
                    <td>Son nom</td>
                    <td>Maux de tete</td>
                    <td>Paid</td>
                    <td>
                        <a class="btn btn-sm btn-link" href="">Detail</a>
                        <a class="btn btn-sm btn-warning" href="">Accepter</a>
                        <a class="btn btn-sm btn-danger" href="">Refuser</a>
                    </td>
                </tr>
                <tr>
                    <td><input class="form-check-input" type="checkbox"></td>
                    <td>01 Jan 2045</td>
                    <td>Son nom</td>
                    <td>Maux de tete</td>
                    <td>Paid</td>
                    <td>
                        <a class="btn btn-sm btn-link" href="">Detail</a>
                        <a class="btn btn-sm btn-warning" href="">Accepter</a>
                        <a class="btn btn-sm btn-danger" href="">Refuser</a>
                    </td>
                </tr>
                
            </tbody>
        </table>
    </div>
</div>