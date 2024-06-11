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
            <div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12">
                @if (Session::has('success'))
                <div class="alert alert-info text-center">
                    {{Session::get('success') }}
                    <a href="" class="float-end"> X</a>
                </div>
                @endif
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h6 class="mb-0">
                        Liste des Patients à consulter
                    </h6>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-dark">
                                
                                <th scope="col">Age</th>
                                <th scope="col">Patient</th>
                                <th scope="col">Sexe</th>
                                <th scope="col">Numero Telephone</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($patients as $patient )
                            <tr>                                
                                <td>{!!$patient->age .' ans' !!}</td>
                                <td>{{$patient->name}} {{$patient->firstname}}</td>
                                <td>
                                    {!! $patient->sexe === 'masculin' ? 'Homme <span><i class="fa fa-mars" aria-hidden="true"></i></span>' : 'Femme <i class="fa fa-venus" aria-hidden="true"></i>' !!}
                                </td>
                                <td>
                                    {{$patient->number ? $patient->number : 'Pas de numero' }}
                                </td>
                                <td class="text-center">
                                    <a href="{{route('specialiste.detail.consultation', ['id' => $patient->id])}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>
                                    <a href="?=1">
                                        <input class="form-check-input"  type="checkbox">
                                    </a>
                                </td>
                                <td>45</td>
                                <td>Son nom complet</td>
                                <td>O +</td>
                                <td>Corps Chaud</td>
                                <td class="text-center">
                                    <a href="{{route('specialiste.detail.consultation')}}">
                                        <i class="fa fa-eye" aria-hidden="true"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
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