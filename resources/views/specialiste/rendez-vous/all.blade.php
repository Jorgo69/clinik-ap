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
    
            <!-- Les Rendez vous Start -->
            <div class="container-fluid pt-4 px-4">
                
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"> Toutes les rendez vous</h6>
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
                                    <th scope="col">Date</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Maux</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="modalDetailPatient" aria-hidden="true">
                                    <div class="modal-dialog modal-xl">
                                    {{-- <div class="modal-dialog modal-fullscreen"> --}}
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalDetailPatient">Nom du Patient</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body d-flex justify-space-evently">
                                            <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                                                <div class="col-sm-auto col-xl-auto">
                                                    <div class="bg-light rounded h-100 p-4">
                                                        <h6 class="mb-4"> Soumise  {!! 'Aujourd\'hui' !!}</h6>
                                                        <div class="d-flex align-items-start">
                                                            <div class="nav flex-column nav-pills me-3 d-none" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                                                <button class="nav-link" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="false">Recent</button>
                                                            </div>
                                                            <div class="tab-content" id="v-pills-tabContent">
                                                                <div class="tab-pane active fade show" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                                                    Consetetur at sit est sit ut ipsum clita at. Sit elitr sit sea dolor tempor eos sit, erat diam ea rebum clita no ea. Et amet sed nonumy sadipscing dolor et ut sed et. Stet eirmod est nonumy clita invidunt rebum. Nonumy dolor ut diam invidunt eirmod nonumy sed gubergren,.
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
                                        </div>
                                    </div>
                                    {{-- </div> --}}
                                    </div>
                                </div>
                                <tr>
                                    <td>
                                        <a href="?=1">
                                            <input class="form-check-input"  type="checkbox">
                                        </a>
                                    </td>
                                    <td>01 Jan 2045</td>
                                    <td>Son nom</td>
                                    <td>Maux de tete</td>
                                    <td class="float-center">
                                        <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Accepter</a>
                                        <a class="btn btn-sm btn-danger m-1 p-3.5" href="">Refuser</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?=1">
                                            <input class="form-check-input"  type="checkbox">
                                        </a>
                                    </td>
                                    <td>01 Jan 2045</td>
                                    <td>Son nom</td>
                                    <td>Maux de tete</td>
                                    <td class="float-center">
                                        <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Accepter</a>
                                        <a class="btn btn-sm btn-danger m-1 p-3.5" href="">Refuser</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?=1">
                                            <input class="form-check-input"  type="checkbox">
                                        </a>
                                    </td>
                                    <td>01 Jan 2045</td>
                                    <td>Son nom</td>
                                    <td>Maux de tete</td>
                                    <td class="float-center">
                                        <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Detail</a>
                                        <a class="btn btn-sm btn-warning m-1 p-3.5" href="">Accepter</a>
                                        <a class="btn btn-sm btn-danger m-1 p-3.5" href="">Refuser</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="card">
                    {{-- <img src="image.jpg" class="card-img-top" alt="Image"> --}}
                    <div class="card-body">
                      <h5 class="card-title">Titre de la carte</h5>
                      <p class="card-text">Description de la carte.</p>
                      <a href="#" class="btn btn-primary">Bouton</a>
                    </div>
                  </div>
                  
                
            </div>
            <!-- Recent Sales End -->
    
    
            <!-- Footer Start -->
            <div class="container-fluid pt-4 px-4">
                @include('components.specialiste.footer')
            </div>
            <!-- Footer End -->
        </div>
        <!-- Content End -->
    
    
        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>
    @push('title_header')
        <title>Mes RDV | {{ config('app.name') }}</title>
    @endpush
</x-specialiste>