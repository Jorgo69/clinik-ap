{{-- @extends('layouts.user')
@section('userContent') --}}
<x-user>
    {{-- Top Bar Start --}}
    @include('components.topBar')
    {{-- Top Bar End --}}

    {{-- Nav Bar Start --}}
    @include('components.navBar')
    {{-- Nav Bar End --}}

    {{-- Page Header Start --}}
    
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-3 text-white mb-3 animated slideInDown">
                Nos Service
            </h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                        <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index')}}">Accueil</a></li>
                        <li class="breadcrumb-item text-primary active" aria-current="page">Nos Services</li>
                </ol>
            </nav>
        </div>
    </div>
    
    {{-- Page Header End --}}

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-sm-12 col-xl-3">
                <h6 class="mb-4">Specialiste</h6>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected="">-- Par specialiste --</option>
                        <option value="1">Cardilogue</option>
                        <option value="2">Dentiste</option>
                        <option value="3">Dermatologue</option>
                        <option value="3">Generaliste</option>
                    </select>
                </div>
                <div class="col-sm-12 col-xl-3">
                <h6 class="mb-4">Pagination</h6>
                    <select class="form-select form-select-sm mb-3" aria-label=".form-select-sm example">
                        <option selected="">Par</option>
                        <option value="1">10</option>
                        <option value="2">25</option>
                        <option value="3">33</option>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <p class="d-inline-block border rounded-pill py-1 px-4">Nos Services</p>
                <h1>Solutions de soins de santé</h1>
            </div>
            <div class="row g-4">
                
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-warning rounded h-100 p-4">
                    <h6 class="mb-4">Nom du Specialiste : Specialite</h6>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">A propos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Horaire</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Rendez-vous</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            Je suis un medicin specialise dans le domaine des coeurs
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <div class="h-100 bg-light rounded p-4">
                                <div id="calender">
                                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                        <ul class="list-unstyled">
                                            <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                                <th class="dow">Lun</th>
                                                                <th class="dow">Mar</th>
                                                                <th class="dow">Mer</th>
                                                                <th class="dow">Jeu</th>
                                                                <th class="dow">Vend</th>
                                                                <th class="dow">Sam</th>
                                                                <th class="dow">Dim</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            <form action="">
                                <div class="input-group mb-3">
                                    <span class="input-group-text" id="basic-addon1">Specialiste@</span>
                                    <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                                </div>
                                <div class="input-group">
                                    <span class="input-group-text">Votre Plainte</span>
                                    <textarea class="form-control" aria-label="With textarea"></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
                </div>
                
                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-warning rounded h-100 p-4">
                    <h6 class="mb-4">Nom du Specialiste : Specialite</h6>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">A propos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Horaire</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Rendez-vous</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            Je suis un medicin specialise dans le domaine des coeurs
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            
                            <div class="h-100 bg-light rounded p-4">
                                <div id="calender">
                                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                        <ul class="list-unstyled">
                                            <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                            <tr>
                                                                <th class="dow">Lun</th>
                                                                <th class="dow">Mar</th>
                                                                <th class="dow">Mer</th>
                                                                <th class="dow">Jeu</th>
                                                                <th class="dow">Vend</th>
                                                                <th class="dow">Sam</th>
                                                                <th class="dow">Dim</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            Et diam et est sed vero ipsum voluptua dolor et, sit eos justo ipsum no ipsum amet sed aliquyam dolore, ut ipsum sanctus et consetetur. Sit ea sit clita lorem ea gubergren. Et dolore vero sanctus voluptua ipsum sadipscing amet at. Et sed dolore voluptua dolor eos tempor, erat amet.
                        </div>
                    </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-warning rounded h-100 p-4">
                    <h6 class="mb-4">Nom du Specialiste : Specialite</h6>
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">A propos</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab"
                                aria-controls="pills-profile" aria-selected="false">Horaire</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-contact" type="button" role="tab"
                                aria-controls="pills-contact" aria-selected="false">Rendez-vous</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            Je suis un medicin specialise dans le domaine des coeurs
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            
                            <div class="h-100 bg-light rounded p-4">
                                <div id="calender">
                                    <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                        <ul class="list-unstyled">
                                            <li class="show">
                                            <div class="datepicker">
                                                <div class="datepicker-days" style="">
                                                    <table class="table table-sm">
                                                        <thead>
                                                                <th class="dow">Lun</th>
                                                                <th class="dow">Mar</th>
                                                                <th class="dow">Mer</th>
                                                                <th class="dow">Jeu</th>
                                                                <th class="dow">Vend</th>
                                                                <th class="dow">Sam</th>
                                                                <th class="dow">Dim</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                            <tr>
                                                                <td data-action="selectDay" data-day="02/25/2024" class="day old weekend">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/26/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/27/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/28/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="02/29/2024" class="day old">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/01/2024" class="day">08h 30 - 19h 30</td>
                                                                <td data-action="selectDay" data-day="03/02/2024" class="day weekend">08h 30 - 19h 30</td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                            Et diam et est sed vero ipsum voluptua dolor et, sit eos justo ipsum no ipsum amet sed aliquyam dolore, ut ipsum sanctus et consetetur. Sit ea sit clita lorem ea gubergren. Et dolore vero sanctus voluptua ipsum sadipscing amet at. Et sed dolore voluptua dolor eos tempor, erat amet.
                        </div>
                    </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>

      {{-- Footer --}}
    @include('components.footer')
    {{-- Footer End --}}
{{-- @endsection --}}
</x-user>