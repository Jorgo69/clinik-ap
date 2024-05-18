<div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12 mb-2">

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
                <a class="btn btn-sm btn-info m-1 p-3.5" type="button" data-bs-toggle="modal" data-bs-target="#modalPatient">Nouveau Patient</a>
            </div>
            <div class="table-responsive">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                    <thead>
                        <tr class="text-dark">
                            <th scope="col">Age</th>
                            <th scope="col">Patient</th>
                            <th scope="col">Adresse Mail</th>
                            <th scope="col">Residence</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($patients as $patient)
                        @php
                            $birthday = date($patient->birthdate);
                            $birthday = intval($birthday);
                            $years = date('Y-m-d');
                            $years = intval($years) ;
                            $years = $years - $birthday;
                        @endphp
                        <tr>
                            <td>{!!$years .' ans' !!}</td>
                            <td>{{$patient->name}} {{$patient->firstname}} </td>
                            <td>{{$patient->email}}</td>
                            <td>
                                {{$patient->residence ? $patient->residence : 'Residence inconnue'}}
                            </td>
                            <td class="float-center">
                                <a href="{{ route('specialiste.details.patients', ['id' => $patient->id])}}" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                        @empty
                            
                        <tr>
                            <td>
                                {{__('34 ans')}}
                            </td>
                            <td> {{__('Son nom complet') }} </td>
                            <td>{{__('Aucune Adresse')}}</td>
                            <td>{{__('Aucune residence connue')}}</td>
                            <td class="float-center">
                                <a href="#" class="btn btn-info"><i class="fa fa-eye" aria-hidden="true"></i></a>
                            </td>
                            
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>


        
</div>

<nav aria-label="Page navigation example">
    <ul class="pagination justify-content-end">
        <li class="page-item disabled">
            <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
        </li>
        <li class="page-item active"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">Next</a>
        </li>
    </ul>
</nav>