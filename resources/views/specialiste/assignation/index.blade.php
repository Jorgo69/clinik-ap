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
            @forelse ($usersBySpecialite as $specialite => $appointments)
                <div class="container-fluid pt-4 px-4">
                    @foreach($appointments as $appointment)
                        <div class="bg-light text-center rounded mb-3 p-4">
                            <div class="d-flex align-items-center justify-content-between mb-4">
                                <h6 class="mb-0"> Domaine:{{ $specialite }} </h6>
                                <button class="btn btn-info" data-bs-toggle="modal" data-bs-target="#RDVModal{{$specialite}}">Voir les médecins disponibles</button>
                            </div>

                            <div class="modal fade" id="RDVModal{{$specialite}}" tabindex="-1" aria-labelledby="RDVModalLabel" aria-hidden="{{$specialite == 0 ? 'true' : 'false'}}">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="RDVModalLabel">Sélectionnez le Médecin </h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>

                                        <div class="modal-body">
                                            <select class="form-select mb-3" name="concerner" id="">
                                                @foreach($appointment['users'] as $user)
                                                    <option value="generaliste">{{ $user->name }} - {{ $user->email }}</option>
                                                @endforeach
                                            </select>
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
                                            <th scope="col">Rendez-Vous N°</th>
                                            <th scope="col">Nom</th>
                                            <th scope="col">Date De Consultation</th>
                                            <th scope="col">Heure De Consultation</th>
                                            <th scope="col">Motif De Consultation</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>{{ $appointment['id'] }}</td>
                                            <td>{{ $appointment['users']->first()->name }}</td>
                                            <td>{{ $appointment['date'] }}</td>
                                            <td>{{ $appointment['hours'] }}</td>
                                            <td>{{ $appointment['motif'] }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endforeach
                </div>
            @empty
            @endforelse

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