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
                
                <div class="bg-light text-center rounded mb-3 p-4">
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0"> Toutes les rendez vous</h6>
                        <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#RDVModal">Prendre Rendez vous</button>
                    </div>
                    @if (Session::has('success'))
                    <div class="alert alert-info">
                        {{ Session::get('success') }}
                        <a href=""><span class="float-end">X</span></a>
                    </div>
                    @endif
                    <div class="modal fade" id="RDVModal" tabindex="-1" aria-labelledby="RDVModalLabel" aria-hidden="true">
                        <div class="modal-dialog"> 
                          <div class="modal-content">
                            <div class="modal-header">
                              <h1 class="modal-title fs-5" id="RDVModalLabel"> Reservez un RDV </h1>
                              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form action="{{route('specialiste.rendez-vous.making')}}" method="POST">
                                @csrf
                                @method('POST')
                            <div class="modal-body">
                              <select name="" class="form-select mb-3"    id="">
                                @forelse ($patients as $patient)
                                <option value="">Selectionner le patient</option>
                                  <option value="{{$patient->id}}">{{$patient->name. ' '.$patient->firstname }}</option>
                                @empty
                                <option value="">Aucun Patient</option>  
                                @endforelse
                              </select>

                              <select class="form-select mb-3" name="" id="">
                                <option value="">Le type de specialiste</option>
                              </select>

                              <select class="form-select mb-3" name="" id="">
                                <option value="Les specialite">Docteur generaliste</option>
                                <option value="Les specialite">Docteur generaliste</option>
                                <option value="Les specialite">Docteur cardio</option>
                                <option value="Les specialite">Docteur cardio</option>
                                <option value="Les specialite">Docteur dentiste</option>
                                <option value="Les specialite">Docteur dentiste</option>
                              </select>
                              
                              <input type="date" name="date" class="form-control mb-2" id="">
                              <input type="time" name="time" class="form-control mb-2" id="">
                              <input type="text" name="pattern" class="form-control" placeholder="Motif de la Consultation">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
                                <input type="submit" class="btn btn-primary" value="Sauvegarder">
                            </div>
                          </div>
                        </div>
                    </div>

                    
                    <div class="table-responsive">
                        <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">Date soumise</th>
                                    <th scope="col">Patient</th>
                                    <th scope="col">Motif</th>
                                    <th scope="col">Sexe</th>
                                    <th scope="col">Age</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">24/12/2002 08:30</th>
                                    <td>Son Nom au complet</td>
                                    <td>Diarhee</td>
                                    <td>Homme</td>
                                    <td>24 ans</td>
                                </tr>
                            </tbody>
                        </table>
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