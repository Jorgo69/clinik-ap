<div class="bg-light text-center rounded p-4 col-12 col-md-12 col-sm-12 col-xl-12 col-xxl-12 mb-2">

    <div id='calendar'></div>

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
                            <th scope="col">Adresse Mail</th>
                            <th scope="col">Residence</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($patiens as $patient)
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
                    {{-- {{$patiens->links()}} --}}
                </table>
            </div>
        </div>
    </div>
    <style>
        svg {
        width: 10px;
        height: 20px;
        }
    </style>


        
</div>

@push('fullCalendar-Script-Global-6')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/index.global.min.js'></script>
@endpush
@push('fullCalendar-Script-Events')
@push('fullCalendar-Script-Locale-Langue')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/locales/fr.js'></script>
@endpush
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
            initialView: 'dayGridMonth',
            locale: 'fr',
            events: '/specialists/dashboard/events', // URL pour charger les événements
            eventContent: function(info) {
            // Créer un conteneur pour le titre de l'événement HTML
            var element = document.createElement('div');
            // Définissez le code HTML interne sur le titre (qui inclut le lien)
            element.innerHTML = info.event.title;
            // Renvoie un objet avec les nœuds DOM à restituer
            return { domNodes: [element] };
        }
        });
        calendar.render();
    });
</script>
@endpush

@push('fullCaldendar-Script-Main')
<script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/main.min.js'></script>
@endpush

@push('link-Style-Main')
<link href='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.14/main.min.css' rel='stylesheet' />
@endpush

{{-- <div id='calendar'></div> --}}