<div class="row g-4">
    
    <div class="col-sm-12 col-md-6 col-xl-6">
        <div class="h-100 bg-light rounded p-4">
            <div class="d-flex align-items-center justify-content-between mb-4">
                <h6 class="mb-0">Liste des taches</h6>
                <a href="">Tout voir</a>
            </div>
            <div class="d-flex mb-2">
                <input class="form-control bg-transparent" type="text" placeholder="Entrer une Tache">
                <button type="button" class="btn btn-primary ms-2">Ajout</button>
            </div>
            @php
                const tache = 'Une tache ajoute';
            @endphp
            <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span>{{tache}}...</span>
                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox">
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span>{{tache}}...</span>
                        <button class="btn btn-sm"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
            <div class="d-flex align-items-center border-bottom py-2">
                <input class="form-check-input m-0" type="checkbox" checked>
                <div class="w-100 ms-3">
                    <div class="d-flex w-100 align-items-center justify-content-between">
                        <span><del>{{tache}}...</del></span>
                        <button class="btn btn-sm text-primary"><i class="fa fa-times"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>