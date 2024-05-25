<div class="">
    <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
        <a href="" class="navbar-brand d-flex d-lg-none me-4">
            <h2 class="text-primary mb-0"><i class="fa fa-hashtag"></i></h2>
        </a>
        <a href="#" class="sidebar-toggler flex-shrink-0">
            <i class="fa fa-bars"></i>
        </a>
        <form class="d-none d-md-flex ms-4">
            <input wire:model.live="query" class="form-control border-0" type="search" data-mdb-select-init data-mdb-filter="true" placeholder="Recherche">
            {{-- <input type="submit" class="btn btn-info" value="Lancer"> --}}
        </form>
    </nav>
    @php
        $total = count($patients);
    @endphp
    
    
    @if( Str::length($query) > 2 )
    @if($total > 0)
    <div class="row mx-5 p-1">
        <div class="card col-auto mx-5 p-1 mt-1 text-center">
        @foreach ($patients as $patient )
                <a class="text-warning" href="{{route('specialiste.detail.consultation', ['id' => $patient->id])}}">
                    {{$patient->firstname. ' '. $patient->name}}
                </a>
        @endforeach
        <span>
            {{$total}} resultat pour {{$query}}
        </span>
        </div>
    </div>
    @else
    <div class="row">
        <div class="card col-3 mx-5 mt-2">
            <span class="text-danger">0 resultat pour {{ $query }}</span>
        </div>
    </div>

    @endif
@endif

</div>