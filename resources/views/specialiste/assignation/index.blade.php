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

              <div class="card" >
                @foreach ($appointments as $appointment )
                  @if ($appointment -> type_specialite === 'generaliste' && $appointment->medecin_id === NULL)
                    
                  <div class="card-header text-center" style="text-transform: capitalize">
                    {{ $appointment -> type_specialite}}
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"></li>
                    {{-- <li class="list-group-item">{{ date('m'. ' '. 'd', strtotime($appointment->date)). ' a '. $appointment->hours }}</li> --}}
                    {{-- <li class="list-group-item">{{ strftime('%B %d, %Y', strtotime($appointment->date)). ' a '. $appointment->hours }}</li> --}}
                    {{-- <li class="list-group-item">{{$appointment->motif}}</li> --}}
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">Nom du patient</th>
                          <th scope="col">Motif</th>
                          <th scope="col">Date demander</th>
                          <th scope="col">Medecin Dispo</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">
                              {{$appointment->patient->name }}
                          </td>
                          <td>
                            {{$appointment->motif}}
                          </td>
                          <td>
                            {{$appointment->date  .' a '. $appointment->hours }}
                          </td>
                          <form action="{{route('specialiste.assignation.medecin')}}" method="POST">
                            @csrf
                            @method('PUT')
                          <td>
                            <input type="hidden" name="rdv" value="{{$appointment->id}}">
                            <select name="medecin_id" class="form-select"  id="">
                              @foreach ($availableMedecins as $medecin)
                                  @if ($medecin->specialite === 'generaliste')
                                  <option value="{{$medecin->id}}">{{ $medecin->name .' '. $medecin->firstname }}</option>                                    
                                  @endif
                                @endforeach
                              </select>
                          </td>
                          <td>
                            <button class="btn btn-primary">Assigner</button>
                          </td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </ul>

                  @endif

                @endforeach
              </div>
            </div>
            <!-- End Generaliste Section -->

            <div class="container-fluid pt-4 px-4">

              <div class="card" >
                @foreach ($appointments as $appointment )
                  @if ($appointment -> type_specialite === 'cardiologue' && $appointment->medecin_id === NULL)
                    
                  <div class="card-header text-center" style="text-transform: capitalize">
                    {{ $appointment -> type_specialite}}
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"></li>
                    {{-- <li class="list-group-item">{{ date('m'. ' '. 'd', strtotime($appointment->date)). ' a '. $appointment->hours }}</li> --}}
                    {{-- <li class="list-group-item">{{ strftime('%B %d, %Y', strtotime($appointment->date)). ' a '. $appointment->hours }}</li> --}}
                    {{-- <li class="list-group-item">{{$appointment->motif}}</li> --}}
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">Nom du patient</th>
                          <th scope="col">Motif</th>
                          <th scope="col">Date demander</th>
                          <th scope="col">Medecin Dispo</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">
                              {{$appointment->patient->name }}
                          </td>
                          <td>
                            {{$appointment->motif}}
                          </td>
                          <td>
                            {{$appointment->date  .' a '. $appointment->hours }}
                          </td>
                          
                            
                          <form action="{{route('specialiste.assignation.medecin')}}" method="POST">
                            @csrf
                            @method('PUT')
                          <td>
                            <input type="hidden" name="rdv" value="{{$appointment->id}}">
                            <select name="medecin_id" class="form-select"  id="">
                              @foreach ($availableMedecins as $medecin)
                                  @if ($medecin->specialite === 'cardiologue')
                                  <option value="{{$medecin->id}}">{{ $medecin->name .' '. $medecin->firstname }}</option>                                    
                                  @endif
                                @endforeach
                              </select>
                          </td>
                          <td>
                            <button class="btn btn-primary">Assigner</button>
                          </td>
                        </form>
                        </tr>
                      </tbody>
                    </table>
                  </ul>

                  @endif

                @endforeach
              </div>
            </div>
            <!-- End cardiologue Section -->

            <div class="container-fluid pt-4 px-4">

              <div class="card" >
                @foreach ($appointments as $appointment )
                  @if ($appointment -> type_specialite === 'dentiste' && $appointment->medecin_id === NULL)
                    
                  <div class="card-header text-center" style="text-transform: capitalize">
                    {{ $appointment -> type_specialite}}
                  </div>
                  <ul class="list-group list-group-flush">
                      <li class="list-group-item"></li>
                    <table class="table text-center">
                      <thead>
                        <tr>
                          <th scope="col">Nom du patient</th>
                          <th scope="col">Motif</th>
                          <th scope="col">Date demander</th>
                          <th scope="col">Medecin Dispo</th>
                          <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td scope="row">
                              {{$appointment->patient->name }}
                          </td>
                          <td>
                            {{$appointment->motif}}
                          </td>
                          <td>
                            {{$appointment->date  .' a '. $appointment->hours }}
                          </td>
                            
                          <form action="{{route('specialiste.assignation.medecin')}}" method="POST">
                            @csrf
                            @method('PUT')
                          <td>
                            <input type="hidden" name="rdv" value="{{$appointment->id}}">
                              <select name="medecin_id" class="form-select"  id="">
                                @foreach ($availableMedecins as $medecin)
                                  @if ($medecin->specialite === 'dentiste')
                                  <option value="{{$medecin->id}}">{{ $medecin->name .' '. $medecin->firstname }}</option>                                    
                                  @endif
                                @endforeach
                              </select>
                          </td>
                          <td>
                            <button class="btn btn-primary">Assigner</button>
                          </td>
                          </form>
                        </tr>
                      </tbody>
                    </table>
                  </ul>

                  @endif

                @endforeach
              </div>
            </div>
            <!-- End dentiste Section -->

              @forelse($availableMedecins as $medecin)
            <li>{{ $medecin->name }} {{ $medecin->firstname }} - Spécialité : {{ $medecin->specialite }}</li>
        @empty
            <li>Aucun médecin disponible</li>
        @endforelse
            
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