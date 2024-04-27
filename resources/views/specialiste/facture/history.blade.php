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
                    <div class="d-flex align-items-center justify-content-between mb-4">
                        <h6 class="mb-0">
                            Liste de toutes les factures
                        </h6>
                        {{-- <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#modalPatient">Nouveau Patient</a> --}}
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
                                    <th scope="col">Patient</th>
                                    <th scope="col">Motif</th>
                                    <th scope="col">Montant</th>
                                    <th scope="col">Date</th>
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
                                    <td>Son nom complet</td>
                                    <td>Consultation</td>
                                    <td>50 000</td>
                                    <td>24/11/2003</td>
                                    <td class="float-center">
                                        <a href="{{ route('specialiste.details.patients')}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?=1">
                                            <input class="form-check-input"  type="checkbox">
                                        </a>
                                    </td>
                                    <td>Son nom complet</td>
                                    <td>Consultation</td>
                                    <td>50 000</td>
                                    <td>24/11/2003</td>
                                    <td class="float-center">
                                        <a href="{{ route('specialiste.details.patients')}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="?=1">
                                            <input class="form-check-input"  type="checkbox">
                                        </a>
                                    </td>
                                    <td>Son nom complet</td>
                                    <td>Consultation</td>
                                    <td>50 000</td>
                                    <td>24/11/2003</td>
                                    <td class="float-center">
                                        <a href="{{ route('specialiste.details.patients')}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                                    </td>
                                </tr>
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
        <title>Liste des factures | {{config('app.name')}}</title>
    @endpush
    </x-specialiste>