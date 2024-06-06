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
                    <div class="col-12 col-md-12 col-lg-12 col-sm-12 col-xl-12 col-xxl-12">
                        <div class="col-sm-auto col-xl-auto">
                            @if (Session::has('success'))
                            <div class="alert alert-info text-center">
                                {{Session::get('success') }}
                                <a href="" class="float-end"> X</a>
                            </div>                                
                            @endif
                           <form action="" method="post">
                            @csrf
                            <div class="bg-light rounded h-100 mb-3 p-4">
                                <h5>Modification du RDV</h5>
                                <div class="mb-3">
                                    <label for="helpPatientId" class="form-label">Patient Concerner</label>
                                    <input type="text" class="form-control" name="patient_id" id="" aria-describedby="helpPatientId" value="{{$appointment->patient->name}}" disabled/>
                                    
                                    @error('patient_id')
                                    <small id="helpPatientId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="helpDocteurId" class="form-label">Docteur</label>
                                    <select name="docteur_id" class="form-select mb-3"    id="">
                                        <option value="" selected>{{$appointment->medecin->name}}</option>
                                        @forelse ($medecins as $medecin)
                                          <option value="{{$medecin->id}}">{{$medecin->name. ' '.$medecin->firstname }}</option>
                                        @empty
                                        <option value="">Aucun Patient</option>  
                                        @endforelse
                                      </select>
                                    @error('docteur_id')
                                    <small id="helpDocteurId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="helpDateId" class="form-label">Date</label>
                                    <input type="date" class="form-control" name="date" id="helpDateId" aria-describedby="helpDateId" placeholder="" value="{{$appointment->date}}" />
                                    
                                    @error('date')
                                    <small id="helpDateId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="helpHeureId" class="form-label">Heure</label>
                                    <input type="text" class="form-control" name="heur" id="helpHeureId" aria-describedby="helpHeureId" placeholder="" value="{{$appointment->hours}}"/>
                                    
                                    @error('heur')
                                    <small id="helpHeureId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="helpMotifId" class="form-label">Motif de la consultation</label>
                                    <input type="text" class="form-control" name="motif" id="" aria-describedby="helpMotifId" placeholder="" value="{{$appointment->motif}}"/>
                                    
                                    @error('motif')
                                    <small id="helpMotifId" class="form-text text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Modifier" class="btn btn-success">
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