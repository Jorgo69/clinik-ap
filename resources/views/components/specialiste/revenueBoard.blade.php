<div class="row g-4">
    
    <div class="col-sm-6 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fa fa-chart-bar fa-3x text-primary"></i>
            <div class="ms-3">
                <p class="mb-2">Total Consult</p>
                <h6 class="mb-0">{{$consultations}}</h6>
            </div>
        </div>
    </div>
    
    
    <div class="col-sm-6 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            {{-- <i class="fab fa-accessible-icon fa-3x text-primary "></i> --}}
            <i class="fa fa-user-md fa-3x text-primary "></i>
            <div class="ms-3">
                <p class="mb-2">Total Docteur</p>
                <h6 class="mb-0">{{$medecins}}</h6>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-xl-3">
        <div class="bg-light rounded d-flex align-items-center justify-content-between p-4">
            <i class="fab fa-accessible-icon fa-3x text-primary "></i>
            <div class="ms-3">
                @php
                    $patientT = count($patients);
                @endphp
                <p class="mb-2">Total Patient</p>
                <h6 class="mb-0">{{$patientT}}</h6>
            </div>
        </div>
    </div>
</div>